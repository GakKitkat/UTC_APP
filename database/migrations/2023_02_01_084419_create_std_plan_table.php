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
        Schema::create('std_plan', function (Blueprint $table) {
            $table->charset = 'utf8'; //ประเภทฟอนต์
            $table->collation = 'utf8_general_ci'; //ฟอนต์ไทย
            $table->engine = 'InnoDB'; //เครื่องมือจัดเก็บข้อมูล MSQL
            $table->id()->bigIncrements()->comment('คีย์หลัก');
            $table->integer('plan_ID')->comment('รหัสแผนการเรียน');
            $table->char('T_code')->comment('รหัสวิชา'); //รหัสวิชา
            $table->integer('Term')->comment('เทอม'); //เทอม
            $table->integer('group_code')->comment('รหัสกลุ่ม'); //รหัสกลุ่ม
            $table->integer('coll_ID')->comment('รหัสวิทยาลัย');  //รหัสวิทยาลัย
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
        Schema::dropIfExists('std_plan');
    }
};
