<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthChartsTable extends Migration
{
    /**
     * Run the migrations.
     * id               : 챠트키
     * medical_chart    : 챠트번호
     * mth_patient_id   : 환자키
     * reg_family       : 가족등록
     * help_notes       : 내원내역
     * chk_pregnant     : 임부여부
     * reg_urgent       : 응급접수
     * chk_in_hospital  : 입원접수
     * remark           : 특이사항
     * help_reason      : 내원사유
     * examin_div       : 검진구분키
     * injury_div       : 공상만상키
     * except_div       : 예외구분키
     * memo             : 메모
     * minimal_pressure : 최저혈압
     * maximum_pressure : 최고혈압
     * pulse            : 맥박
     * weight           : 체중
     * temperature      : 체온
     * chk_diabetes     : 당뇨여부
     * @return void
     */
    public function up()
    {
        Schema::create('mth_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medical_chart',20)->unique()->index();
            $table->integer('mth_patient_id')->unsigned();
            $table->foreign('mth_patient_id')->references('id')->on('mth_patients');
            $table->boolean('reg_family')->nullable();
            $table->text('help_notes')->nullable();
            $table->boolean('chk_pregnant')->nullable();
            $table->boolean('chk_in_hospital')->nullable();
            $table->text('remark')->nullable();
            $table->text('help_reason')->nullable();
            $table->integer('examin_div')->unsigned();
            $table->foreign('examin_div')->references('id')->on('mth_codes');
            $table->integer('injury_div')->unsigned();
            $table->foreign('injury_div')->references('id')->on('mth_codes');
            $table->integer('except_div')->unsigned();
            $table->foreign('except_div')->references('id')->on('mth_codes');
            $table->text('memo')->nullable();
            $table->decimal('minimal_pressure', 3, 0);
            $table->decimal('maximum_pressure', 3, 0);
            $table->decimal('pulse', 3, 0);
            $table->decimal('weight', 3, 2);
            $table->decimal('temperature', 3, 1);
            $table->boolean('chk_diabetes');
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
        Schema::drop('mth_charts');
    }
}
