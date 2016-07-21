<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_doctor_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('mth_doctors');
            $table->date('examination_date');                       //진료일
            $table->time('examination_time_from')->nullable();      //진료시작
            $table->time('examination_time_to')->nullable();        //진료종료
            $table->boolean('off_day')->nullable();                 //진료없음
            $table->integer('examination_room_id')->unsigned()->nullable(); //진료실
            $table->foreign('examination_room_id')->references('id')->on('mth_examination_rooms');
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
        Schema::drop('mth_doctor_schedules');
    }
}
