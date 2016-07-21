<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_num', 10)->unique();   //사원번호 validation
            $table->integer('employee_div')->unsigned();    //직원구분
            $table->date('entry_date');                     //입사일
            $table->foreign('employee_div')->references('id')->on('mth_codes');
            $table->string('name', 40);                     //직원명
            $table->string('id_num', 1000);                 //주민번호 (XXXXXX-XXXXXXX) - 암호화/validation
            $table->string('birthday', 8);                  //생년월일 (780517 형식) - validation
            $table->boolean('chk_solar');                   //양력
            $table->string('phone', 1000)
                ->nullable();                               //전화번호 (00-000-0000 형태로 저장) - validation
            $table->string('cellphone', 1000)
                ->nullable();                               //휴대폰번호 (000-000-0000 형태로 저장) - validation
            $table->string('email', 50);                    //이메일주소 - validation
            $table->string('postal_code', 20);              //우편번호 - validation
            $table->string('addr', 50);                     //주소
            $table->string('addr_detail', 100);             //상세주소
            $table->text('memo')->nullable();               //메모
            $table->integer('user_id')->unsigned()->nullable(); //사이트 사용자키
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('mth_employees');
    }
}
