<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     * id                       : 의사스케쥴키
     * doctor_id                : 의사키
     * examination_date         : 진료일
     * examination_time_from    : 진료시작시간
     * examination_time_to      : 진료종료시간
     * off_day                  : 진료없음여부
     * examination_room_id      : 진료실키
     * @return void
     */
    public function up()
    {
        Schema::create('mth_doctor_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('mth_doctors');
            $table->date('examination_date');
            $table->time('examination_time_from')->nullable();
            $table->time('examination_time_to')->nullable();
            $table->boolean('off_day')->nullable();
            $table->integer('examination_room_id')->unsigned()->nullable();
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
