<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = Article::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
        $article = Article::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 2
        ]);
        $article = Article::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
        $article = Article::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 2
        ]);
        $article = Article::create([
            'title'  => 'name', 
            'description'=> 'desciription',
            'url' =>  'www.google.com',
            'category_id' => 1
        ]);
    }
}
