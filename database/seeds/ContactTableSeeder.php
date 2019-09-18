<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'description' => 'Qualamy nisl sodales sit amet sapien id, placerat sodales orciter. Vivamus nec magna rhoncus felis, faucibus printy.',
            'address' => 'Uttara, Dhaka'
        ]);
    }
}
