<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     * id           : 달력키
     * cal_date     : 날짜
     * time_start   : 영업시작시간
     * time_end     : 영업종료시간
     * holiday      : 휴일여부
     * holiday_desc : 휴일내역
     * notes        : 비고
     * @return void
     */
    public function up()
    {
        Schema::create('mth_calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->date('cal_date');
            $table->time('time_start');
            $table->time('time_end');
            $table->boolean('holiday');
            $table->string('holiday_desc',30);
            $table->text('notes');
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
