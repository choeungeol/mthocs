<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthReservationsTable extends Migration
{
    /**
     * Run the migrations.
     * id                       : 예약키
     * mth_patient_id           : 환자키
     * reserve_reason           : 예약사유
     * mth_examin_schedule_id   : 진료스케쥴
     * canceled                 : 취소여부
     * @return void
     */
    public function up()
    {
        Schema::create('mth_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mth_patient_id')->unsigned();
            $table->foreign('mth_patient_id')->references('id')->on('mth_patients');
            $table->text('reserve_reason')->nullable();
            $table->integer('mth_examin_schedule_id')->unsigned();
            $table->foreign('mth_examin_schedule_id')->references('id')->on('mth_examin_schedules');
            $table->boolean('canceled')->nullable();
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
        Schema::drop('mth_reservations');
    }
}
