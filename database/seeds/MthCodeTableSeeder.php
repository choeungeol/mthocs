<?php

use Illuminate\Database\Seeder;

class MthCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 장애분류코드
        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV001',
            'code_name'     => '해당없음',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV002',
            'code_name'     => '장루 요루장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV003',
            'code_name'     => '신장장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV004',
            'code_name'     => '심장장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV005',
            'code_name'     => '간장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV006',
            'code_name'     => '호흡기장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV007',
            'code_name'     => '간질장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV008',
            'code_name'     => '지체장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV009',
            'code_name'     => '죄병변장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV010',
            'code_name'     => '시각장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV011',
            'code_name'     => '청각장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
        'code_group_id' => 1,
        'user_id'       => 1,
        'code_id'       => 'DISDIV012',
        'code_name'     => '언어장애',
        'created_at'    => \Carbon\Carbon::now(),
        'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV013',
            'code_name'     => '안면장애',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV014',
            'code_name'     => '지적장애 ',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV015',
            'code_name'     => '자폐성장애 ',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('mthcodes')->insert([
            'code_group_id' => 1,
            'user_id'       => 1,
            'code_id'       => 'DISDIV016',
            'code_name'     => '정신장애 ',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

    }
}
