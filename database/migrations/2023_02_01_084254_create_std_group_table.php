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
        Schema::create('std_group', function (Blueprint $table) {
            $table->charset = 'utf8'; //ประเภทฟอนต์
            $table->collation = 'utf8_general_ci'; //ฟอนต์ไทย
            $table->engine = 'InnoDB'; //เครื่องมือจัดเก็บข้อมูล MSQL
            $table->id()->bigIncrements()->comment('คีย์หลัก');
            $table->integer('group_code')->comment('รหัสกลุ่ม'); //รหัสกลุ่ม
            $table->string('full_name')->comment('ชื่อเต็มของกลุ่ม'); //ชื่อเต็มของกลุ่ม
            $table->string('short_name')->comment('ชื่อย่อของกลุ่ม'); //ชื่อย่อของกลุ่ม
            $table->string('advisor')->comment('ครูที่ปรึกษา'); //ครูที่ปรึกษา
            $table->integer('Department_ID')->comment('รหัสแผนก'); //รหัสแผนก
            $table->integer('coll_ID')->comment('ไอดีวิทยาลัย'); //ไอดีวิทยาลัย
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_group');
    }
};
