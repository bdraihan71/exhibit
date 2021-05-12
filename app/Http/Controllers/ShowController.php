<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Education;
use App\Experience;
use App\Footer;
use App\Profile;
use App\Project;
use App\Skill;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\Podcast;
use App\OtherMedia;
use App\Subscriber;

class ShowController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $educations = Education::all();
        $testimonials = Testimonial::all();
        $skills = Skill::all();
        $profile = Profile::find(1);
        $projects = Project::all();
        $footer = Footer::find(1);
        $contact = Contact::find(1);
        $cats = Category::orderBy('id')->get();
        $articles = Article::latest()->take(4)->get();
        $selected_category = null;
        $podcasts = Podcast::latest()->take(4)->get();
        $othermedias = OtherMedia::latest()->take(4)->get();
        $subscribers = Subscriber::latest()->take(4)->get();
        
        return view('layouts.body', compact('subscribers', 'othermedias', 'podcasts','experiences', 'educations', 'testimonials', 'skills','profile','projects','footer','contact', 'cats', 'articles', 'selected_category'));
    }

    public function seeImage(Request $request){
        $profile = Profile::find(1);
        $image = $request->image;
        return view('see-image', compact('image', 'profile'));
    }
}
