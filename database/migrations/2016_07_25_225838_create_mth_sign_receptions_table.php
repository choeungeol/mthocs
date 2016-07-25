<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthSignReceptionsTable extends Migration
{
    /**
     * Run the migrations.
     * id                   : 접수키
     * mth_reservation_id   : 예약키
     * sign_date            : 접수일자
     * rel_code             : 관계키
     * mth_chart_id         : 차트키
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_sign_receptions', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('mth_sign_receptions');
    }
}
