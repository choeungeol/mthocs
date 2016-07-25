<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     * id               : 병동키
     * mth_building_id  : 건물키
     * basement         : 지하
     * floor            : 층
     * house_number     : 호수
     * name             : 병동명
     * @return void
     */
    public function up()
    {
        Schema::create('mth_wards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mth_building_id')
                ->unsigned();
            $table->foreign('mth_building_id')
                ->references('id')
                ->on('mth_buildings');
            $table->boolean('basement')
                ->nullable();
            $table->integer('floor')
                ->unsigned();
            $table->integer('house_number')
                ->unsigned();
            $table->string('name', 20);
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
