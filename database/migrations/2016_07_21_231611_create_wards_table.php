<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_wards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mth_building_id')
                ->unsigned();                     // 컨물키
            $table->foreign('mth_building_id')
                ->references('id')
                ->on('mth_buildings');
            $table->boolean('basement')
                ->nullable();                     // 지하인 경우에 true
            $table->integer('floor')
                ->unsigned();                     // 층
            $table->integer('house_number')
                ->unsigned();                     // 호수
            $table->string('name', 20);           // 병동명
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
        Schema::drop('mth_wards');
    }
}
