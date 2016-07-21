<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSickRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_sick_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mth_ward_id')
                ->unsigned();                       // 병동키
            $table->foreign('mth_ward_id')
                ->references('id')
                ->on('mth_wards');
            $table->string('name', 30);             // 병실명
            $table->text('description');             // 병실내역
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
        Schema::drop('mth_sick_rooms');
    }
}
