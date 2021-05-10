<?php

use Illuminate\Database\Seeder;
use App\Podcast;

class OtherMediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $othermedia = OtherMedia::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
        $othermedia = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 2
        ]);
        $othermedia = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
        $othermedia = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 2
        ]);
        $othermedia = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
    }
}
