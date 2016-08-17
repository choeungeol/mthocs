<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthAidSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     * id               : 지원스케쥴키
     * aid_room_id      : 지원실키
     * aid_date         : 진료일자
     * aid_time_from    : 진료시작시간
     * aid_time_to      : 진료종료시간
     * @return void
     */
    public function up()
    {
        Schema::create('mth_aid_schedules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('aid_room_id')->unsigned();
            $table->foreign('aid_room_id')->references('id')->on('mth_aid_rooms');
            $table->date('aid_date');
            $table->time('aid_time_from')->nullable();
            $table->time('aid_time_to')->nullable();
            $table->boolean('off_day')->nullable();
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
        Schema::drop('mth_aid_schedules');
    }
}
