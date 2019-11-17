<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raihan Farhad',
            'email' => 'asifarefinbonny18@gmail.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh1971')
        ]);
    }
}
