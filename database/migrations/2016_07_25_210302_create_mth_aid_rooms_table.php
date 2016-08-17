<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthAidRoomsTable extends Migration
{
    /**
     * Run the migrations.
     * id           : 키
     * mth_ward_id  : 병동키
     * aid_div_id   : 지원실 구분 코드
     * name         : 지원실명
     * description  : 지원실내역
     * @return void
     */
    public function up()
    {
        Schema::create('mth_aid_rooms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('mth_ward_id')
                ->unsigned();
            $table->foreign('mth_ward_id')
                ->references('id')
                ->on('mth_wards');
            $table->integer('aid_div_id')->unsigned();
            $table->foreign('aid_div_id')->references('id')->on('mth_codes');
            $table->string('name', 30);
            $table->text('description');
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
        Schema::drop('mth_aid_rooms');
    }
}
