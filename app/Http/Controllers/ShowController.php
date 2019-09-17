<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\Footer;
use App\Profile;
use App\Project;
use App\Skill;
use App\Testimonial;
use Illuminate\Http\Request;

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
        return view('layouts.body', compact('experiences', 'educations', 'testimonials', 'skills','profile','projects','footer'));
    }
}
