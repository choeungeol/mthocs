<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);         //수진자명
            $table->string('id_num', 50);       //주민번호 (XXXXXX-XXXXXXX) - 암호화/validation
            $table->string('birthday', 8);      //생년월일 (780517 형식) - validation
            $table->boolean('chk_solar');       //양력
            $table->string('buss_num', 50)
                  ->nullable();                 //사업자등록번호(XXX-XX-XXXXX 형태) - 암호화/validation
            $table->string('buss_nam', 50)
                  ->nullable();                 //사업자명
            $table->string('phone', 20)
                  ->nullable();                 //전화번호 (00-000-0000 형태로 저장) - validation
            $table->string('cellphone', 20)
                  ->nullable();                 //휴대폰번호 (000-000-0000 형태로 저장) - validation
            $table->string('email', 50);        //이메일주소 - validation
            $table->integer('dis_id')
                  ->unsigned();                 //장애분류키 - validation
            $table->foreign('dis_id')->references('id')->on('mth_codes');
            $table->boolean('info_agg');        //정보동의여부
            $table->boolean('foreigner');       //외국인여부
            $table->boolean('married');         //기혼여부
            $table->boolean('chk_list');        //블랙리스트
            $table->boolean('chk_pager');       //문자 수신여부
            $table->boolean('chk_email');       //이메일 수신여부
            $table->string('postal_code', 20);  //우편번호 - validation
            $table->string('addr', 50);         //주소
            $table->string('addr_detail', 100); //상세주소
            $table->integer('vet_id')
                  ->unsigned();                 //보훈구분키
            $table->foreign('vet_id')->references('id')->on('mth_codes');
            $table->string('vet_num', 30);      //보훈번호 ->validation
            $table->text('memo')->nullable();   //메모
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
        Schema::drop('mth_patients');
    }
}
