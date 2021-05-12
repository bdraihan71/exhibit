<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Profile;
use App\Testimonial;
use App\Category;

class ArticlesController extends Controller
{
    public function index(Request $request){
        if($request->category_id != null){
            $articles = Article::where('category_id', $request->category_id)->get();
            $selected_category = Category::find( $request->category_id);
        }else{
            $articles = Article::all();
            $selected_category = null;
        }
        $cats = Category::orderBy('id')->get();
        dd()
        
        $profile = Profile::find(1);
        $categories = Category::find(1);
        return view('articles.index', compact('articles', 'profile', 'articles', 'cats', 'selected_category'));
    }

    public function create(Request $request){
        $profile = Profile::find(1);
        $categories = Category::orderBy('id')->get();
        return view('articles.create', compact('profile', 'categories'));
    }

    public function edit(Request $request, Article $article){
        $profile = Profile::find(1);
        $categories = Category::orderBy('id')->get();
        return view('articles.edit', compact('profile', 'categories', 'article'));
    }

    public function save(Request $request){
        Article::create([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "url" => $request->url,
            "created_at" => $request->created_at
        ]);
        return redirect()->back();
    }
    public function update(Request $request, Article $article){
        $article->update([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "url" => $request->url,
            "created_at" => $request->created_at
        ]);
        return redirect()->back();
    }
    
    public function delete(Request $request, Article $article){
        $article->delete();
        return redirect()->route('article.index');
    }
    
}
