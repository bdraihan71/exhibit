<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\Testimonial;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $educations = Education::all();
        $testimonials = Testimonial::all();
        return view('layouts.body', compact('experiences','educations','testimonials'));
    }
}
