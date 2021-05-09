<?php

use Illuminate\Database\Seeder;
use App\Podcast;
class PodcastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $podcast = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
        $podcast = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 2
        ]);
        $podcast = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
        $podcast = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 2
        ]);
        $podcast = Podcast::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
    }
}
