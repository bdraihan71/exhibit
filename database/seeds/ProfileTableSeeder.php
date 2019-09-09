<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'name' => 'Asif Arefin Bonny',
            'image' => '/frontend/images/profile.png',
            'designation' => 'test',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'dob' => new DateTime,
            'phone' => '0183642367382',
            'email' => 'test@test.com',
            'skype' => 'skytest',
            'website' => 'test.com',
            'linkedin' => 'litest',
            'facebook' => 'fbtest',
            'twitter' => 'twtest',
            'youtube' => 'yttest',
            'instagram' => 'intest',
        ]);
    }
}
