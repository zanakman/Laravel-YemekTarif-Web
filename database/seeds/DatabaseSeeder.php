<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Cihan",
            'email' => "cihannalp@gmail.com",
            'password' => bcrypt('qwe123qwe'),
            'admin' => 1
        ]);
    }
}
