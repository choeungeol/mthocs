<?php

use Illuminate\Database\Seeder;

class MthCodeGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 장애분류코드
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'DIS',
            'group_name'    => '장애분류',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 종별
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'DIV',
            'group_name'    => '종별',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 유형
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'KND',
            'group_name'    => '유형',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 관계
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'REL',
            'group_name'    => '관계',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 자격구분
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'QUL',
            'group_name'    => '자격구분',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 예외구분
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'EXC',
            'group_name'    => '예외구분',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 초재검진
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'EXM',
            'group_name'    => '초재검진',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 보훈내용
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'VET',
            'group_name'    => '보훈내용',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        // 공상만성
        DB::table('mth_code_groups')->insert([
            'group_id'      => 'INJ',
            'group_name'    => '공상만성',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

    }
}
