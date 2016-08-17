<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     * id           : 직원키
     * employee_num : 사원번호 (validation)
     * employee_div : 직원구분
     * entry_date   : 입사일
     * name         : 직원명
     * id_num       : 주민등록번호 (XXXXXX-XXXXXXX/validation/암호화
     * birthday     : 생년월일 (YYYYMMDD/validation)
     * chk_solar    : 양력여부
     * phone        : 전화번호 (XX-XXX-XXXX/Validation)
     * cellphone    : 휴대폰번호 (XXX-XXXX-XXXX/Validation)
     * email        : 이메일주소 (validation)
     * postal_code  : 우편번호 (validation)
     * addr         : 주소
     * addr_detail  : 상세주소
     * memo         : 메모
     * user_id      : 사용자키
     * @return void
     */
    public function up()
    {
        Schema::create('mth_employees', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('employee_num', 10)->unique();
            $table->integer('employee_div')->unsigned();
            $table->foreign('employee_div')->references('id')->on('mth_codes');
            $table->date('entry_date');
            $table->string('name', 40);
            $table->string('id_num', 1000);
            $table->string('birthday', 8);
            $table->boolean('chk_solar');
            $table->string('phone', 1000)
                ->nullable();
            $table->string('cellphone', 1000)
                ->nullable();
            $table->string('email', 50);
            $table->string('postal_code', 20);
            $table->string('addr', 50);
            $table->string('addr_detail', 100);
            $table->text('memo')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
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
