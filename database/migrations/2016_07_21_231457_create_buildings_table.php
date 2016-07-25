<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     * id           : 건물키
     * postal_code  : 우편번호
     * addr         : 주소
     * addr_detail  : 상세주소
     * name         : 건물명
     * @return void
     */
    public function up()
    {
        Schema::create('mth_buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postal_code', 20);
            $table->string('addr', 50);
            $table->string('addr_detail', 100);
            $table->string('name',50);
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
        Schema::drop('mth_buildings');
    }
}
