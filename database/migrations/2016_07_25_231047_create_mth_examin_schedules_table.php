<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthExaminSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     * id                       : 진료스케쥴키
     * mth_doctor_schedule_id   : 의사스케쥴키
     * mth_chart_id             : 차트키
     * mth_reservation_id       : 예약키
     * reserve_time             : 예약시간
     * start_time               : 진료시작
     * end_time                 : 진료종료
     * @return void
     */
    public function up()
    {
        Schema::create('mth_examin_schedules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('doctor_schedule')->unsigned();
            $table->foreign('doctor_schedule')->references('id')->on('mth_doctor_schedules');
            $table->integer('mth_chart_id')->unsigned()->nullable();
            $table->foreign('mth_chart_id')->references('id')->on('mth_charts');
            $table->integer('reserve')->unsigned()->nullable();
            $table->foreign('reserve')->references('id')->on('mth_reservations');
            $table->time('reserve_time');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
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
        Schema::drop('mth_examin_schedules');
    }
}
