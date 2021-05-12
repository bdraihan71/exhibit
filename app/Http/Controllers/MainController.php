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
class MainController extends Controller
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
        $cats = Category::orderBy('name')->get();
        $articles = Article::latest()->take(5)->get();
        $podcasts = Podcast::latest()->take(5)->get();

        $othermedias = OtherMedia::latest()->take(4)->get();
        $subscribers = Subscriber::latest()->take(4)->get();
        $selected_category = null;
        return view('layouts.body', compact('subscribers', 'othermedias', 'podcasts', 'experiences','educations','testimonials','skills','profile','projects', 'footer','contact', 'cats', 'articles', 'podcasts', 'selected_category'));
    }
}
