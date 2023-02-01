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
        Schema::create('std_course', function (Blueprint $table) {
            $table->charset = 'utf8'; //ประเภทฟอนต์
            $table->collation = 'utf8_general_ci'; //ฟอนต์ไทย
            $table->engine = 'InnoDB'; //เครื่องมือจัดเก็บข้อมูล MSQL
            $table->id()->bigIncrements()->comment('คีย์หลัก');
            $table->char('T_code')->comment('รหัสวิชา'); //รหัสวิชา
            $table->char('subname')->comment('ชื่อวิชา'); //ชื่อวิชา
            $table->integer('hour')->comment('ชั่วโมงเรียน'); //จำนวนเวลา
            $table->integer('theory')->comment('ชั่วโมงทฤษฎี'); //จำนวนทฤษฎี
            $table->integer('practice')->comment('ชั่วโมงปฏิบัติ'); //จำนวนปฏิบัติ
            $table->integer('self_study')->comment('ชั่วโมงศึกษาด้วยตัวเอง'); //จำนวนวิชาศึกษาด้วยตัวเอง
            $table->float('credit')->comment('หน่วยกิต'); //หน่วยกิต
            $table->float('credit_theory')->comment('หน่วยกิตทฤษฎี'); //หน่วยกิตทฤษฎี
            $table->float('credit_practice')->comment('หน่วยกิตปฏิบัติ'); //หน่วยกิตปฏิบัติ
            $table->float('price')->comment('ราคา'); //ราคา
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
        Schema::dropIfExists('std_course');
    }
};
