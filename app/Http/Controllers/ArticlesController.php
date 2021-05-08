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
        $cats = Category::orderBy('name')->get();
        
        $profile = Profile::find(1);
        $categories = Category::find(1);
        return view('articles.index', compact('articles', 'profile', 'articles', 'cats', 'selected_category'));
    }
}
