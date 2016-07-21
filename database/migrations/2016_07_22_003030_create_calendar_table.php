<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->date('cal_date');   //날짜
            $table->time('time_start'); //시작시간
            $table->time('time_end');   //종료시간
            $table->boolean('holiday'); //휴일
            $table->string('holiday_desc',30); //휴일내역
            $table->text('notes');      //비고
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
        Schema::drop('mth_calendars');
    }
}
