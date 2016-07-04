<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'      => 'ocsemradm',
            'email'     => 'hnsc1978@gmail.com'
        ]);
    }
}
