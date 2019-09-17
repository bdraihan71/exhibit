<?php

use Illuminate\Database\Seeder;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'copyright' => '2019 Techynaf',
            'cv' => '/frontend/images/test.pdf'
            ]);
    }
}
