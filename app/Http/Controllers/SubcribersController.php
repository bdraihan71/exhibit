<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use App\Profile;
use App\Testimonial;
use App\Category;

class SubcribersController extends Controller
{
    public function index(Request $request){
        if($request->category_id != null){
            $subscribers = Subscriber::where('category_id', $request->category_id)->get();
            $selected_category = Category::find( $request->category_id);
        }else{
            $subscribers = Subscriber::all();
            $selected_category = null;
        }
        $cats = Category::orderBy('name')->get();
        
        $profile = Profile::find(1);
        $categories = Category::find(1);
        return view('subscribers.index', compact('subscribers', 'profile', 'subscribers', 'cats', 'selected_category'));
    }

    public function create(Request $request){
        $profile = Profile::find(1);
        $categories = Category::orderBy('name')->get();
        return view('subscribers.create', compact('profile', 'categories'));
    }

    

    public function save(Request $request){
        Subscriber::create([
            "name" => $request->name,
            "email" => $request->email
        ]);
        return redirect()->back();
    }
    
    
    public function delete(Request $request, Subscriber $subscriber){
        $subscriber->delete();
        return redirect()->route('subscriber.index');
    }
    
}
