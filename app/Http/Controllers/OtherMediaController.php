<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OtherMedia;
use App\Profile;
use App\Testimonial;
use App\Category;

class OtherMediaController extends Controller
{
    public function index(Request $request){
        if($request->category_id != null){
            $othermedias = OtherMedia::where('category_id', $request->category_id)->get();
            $selected_category = Category::find( $request->category_id);
        }else{
            $othermedias = OtherMedia::all();
            $selected_category = null;
        }
        $cats = Category::orderBy('name')->get();
        
        $profile = Profile::find(1);
        $categories = Category::find(1);
        return view('othermedias.index', compact('profile', 'othermedias', 'cats', 'selected_category'));
    }

    public function create(Request $request){
        $profile = Profile::find(1);
        $categories = Category::orderBy('name')->get();
        return view('othermedias.create', compact('profile', 'categories'));
    }

    public function edit(Request $request, OtherMedia $othermedia){
        $profile = Profile::find(1);
        $categories = Category::orderBy('name')->get();
        return view('othermedias.edit', compact('profile', 'categories', 'othermedia'));
    }

    public function save(Request $request){
        OtherMedia::create([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "url" => $request->url,
            "created_at" => $request->created_at
        ]);
        return redirect()->back();
    }
    public function update(Request $request, OtherMedia $othermedia){
        $othermedia->update([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "url" => $request->url,
            "created_at" => $request->created_at
        ]);
        return redirect()->back();
    }
    
    public function delete(Request $request, OtherMedia $othermedia){
        $othermedia->delete();
        return redirect()->route('othermedia.index');
    }
    
}
