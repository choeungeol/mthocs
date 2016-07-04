<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mthcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code_group_id')->unsigned();
            $table->foreign('code_group_id')->references('id')->on('mthcodegroups');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('code_id', 20);
            $table->string('code_name', 40);
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
        Schema::drop('mthcodes');
    }
}
