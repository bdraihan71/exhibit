<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podcast;
use App\Profile;
use App\Testimonial;
use App\Category;

class PodcastsController extends Controller
{
    public function index(Request $request){
        if($request->category_id != null){
            $podcasts = Podcast::where('category_id', $request->category_id)->get();
            $selected_category = Category::find( $request->category_id);
        }else{
            $podcasts = Podcast::all();
            $selected_category = null;
        }
        $cats = Category::orderBy('name')->get();
        
        $profile = Profile::find(1);
        $categories = Category::find(1);
        return view('podcasts.index', compact('profile', 'podcasts', 'cats', 'selected_category'));
    }

    public function create(Request $request){
        $profile = Profile::find(1);
        $categories = Category::orderBy('name')->get();
        return view('podcasts.create', compact('profile', 'categories'));
    }

    public function edit(Request $request, Podcast $podcast){
        $profile = Profile::find(1);
        $categories = Category::orderBy('name')->get();
        return view('podcasts.edit', compact('profile', 'categories', 'podcast'));
    }

    public function save(Request $request){
        Podcast::create([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "url" => $request->url,
            "created_at" => $request->created_at
        ]);
        return redirect()->back();
    }
    public function update(Request $request, Podcast $podcast){
        $podcast->update([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "url" => $request->url,
            "created_at" => $request->created_at
        ]);
        return redirect()->back();
    }
    
    public function delete(Request $request, Podcast $podcast){
        $podcast->delete();
        return redirect()->route('podcast.index');
    }
    
}
