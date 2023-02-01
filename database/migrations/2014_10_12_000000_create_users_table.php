<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8'; //ประเภทฟอนต์
            $table->collation = 'utf8_general_ci'; //ฟอนต์ไทย
            $table->engine = 'InnoDB'; //เครื่องมือจัดเก็บข้อมูล MSQL

            $table->id()->bigIncrements()->comment('คีย์หลัก'); //เป็นคีย์หลักแบบ int และจะนับเพิ่มค่าขึ้นที่ละ 1 เมือมีการนำข้อมูลเข้า
            $table->integer('std_id')->comment('รหัสนักเรียน'); //รหัสนักเรียน
            $table->string('prename')->comment('คำนำหน้า'); //เพิ่มมา
            $table->string('name')->comment('ชื่อ'); //เพิ่มมา
            $table->string('surname')->comment('นามสกุล'); //เพิ่มมา
            $table->string('email')->unique()->comment('อีเมล์');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('รหัสผ่าน');
            $table->char('ID_card_code')->comment('รหัสบัตรประจำตัวประชาชน'); //รหัสบัตรประจำตัวประชาชน
            $table->integer('group_code')->comment('รหัสกลุ่ม'); //รหัสกลุ่ม
            $table->integer('department_ID')->comment('รหัสแผนก'); //รหัสแผนก
            $table->integer('coll_ID')->comment('รหัสวิทยาลัย');  //รหัสวิทยาลัย
            $table->string('address')->comment('ที่อยู่นักเรียน');  //ที่อยู่นักเรียน
            $table->string('type')->comment('ประเภท'); //ประเภท  เช่น นักเรียน ครู แอดมิน
            $table->rememberToken()->comment('จดจำโทเค็น');
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->softDeletes()->comment('จดจำการลบ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
