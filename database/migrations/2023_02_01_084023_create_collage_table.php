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
        Schema::create('collage', function (Blueprint $table) {
            $table->charset = 'utf8'; //ประเภทฟอนต์
            $table->collation = 'utf8_general_ci'; //ฟอนต์ไทย
            $table->engine = 'InnoDB'; //เครื่องมือจัดเก็บข้อมูล MSQL
            $table->id()->bigIncrements()->comment('คีย์หลัก');
            $table->integer('coll_ID')->comment('ไอดีวิทยาลัย'); //ไอดีวิทยาลัย
            $table->char('coll_Name')->comment('ชื่อวิทยาลัย'); //ชื่อวิทยาลัย
            $table->char('coll_province')->comment('จังหวัดของวิทยาลัย'); //จังหวัดของวิทยาลัย
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collage');
    }
};
