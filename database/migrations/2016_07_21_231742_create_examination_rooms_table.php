<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationRoomsTable extends Migration
{
    /**
     * Run the migrations.
     * id           : 진료실키
     * mth_ward_id  : 병동키
     * name         : 진료실명
     * description  : 진료실내역
     * @return void
     */
    public function up()
    {
        Schema::create('mth_examination_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mth_ward_id')
                ->unsigned();
            $table->foreign('mth_ward_id')
                ->references('id')
                ->on('mth_wards');
            $table->string('name', 30);
            $table->text('description');
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
        Schema::drop('mth_examination_rooms');
    }
}
