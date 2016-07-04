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
        DB::table('mthcodegroups')->insert([
            'group_id'      => 'DISDIV',
            'group_name'    => '장애분류',
            'user_id'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
    }
}
