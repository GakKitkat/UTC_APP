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
        Schema::create('department', function (Blueprint $table) {
            $table->charset = 'utf8'; //ประเภทฟอนต์
            $table->collation = 'utf8_general_ci'; //ฟอนต์ไทย
            $table->engine = 'InnoDB'; //เครื่องมือจัดเก็บข้อมูล MSQL
            $table->id()->bigIncrements()->comment('คีย์หลัก');
            $table->integer('Department_ID')->comment('รหัสแผนก'); //รหัสแผนก
            $table->string('Department_Name_TH')->comment('ชื่อแผนก (ไทย)'); //ชื่อแผนก (ไทย)
            $table->string('Department_Name_ENG')->comment('ชื่อแผนก (อังกฤษ)'); //ชื่อแผนก (อังกฤษ  )
            $table->string('fieldwork')->comment('สาขางาน'); //สาขางาน
            $table->string('Subtype')->comment('ประเภทวิชา'); //ประเภทวิชา
            $table->integer('coll_ID')->comment('รหัสวิทยาลัย');  //รหัสวิทยาลัย
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
};
