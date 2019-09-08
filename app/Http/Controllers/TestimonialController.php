<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'company' => 'required|max:255',
            'description' => 'required|max:500',
        ]);

        $testimonial = new Testimonial([
            'name' => $request->get('name'),
            'designation' => $request->get('designation'),
            'designation' => $request->get('designation'),
            'company' => $request->get('company'),
            'description' => $request->get('description'),
        ]);

        $testimonial->save();
        return redirect('/edit');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect('/edit');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('layouts.edit.testimonial', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'company' => 'required|max:255',
            'description' => 'required|max:500',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->get('name');
        $testimonial->designation = $request->get('designation');
        $testimonial->company = $request->get('company');
        $testimonial->description = $request->get('description');
        $testimonial->save();
        return redirect('/edit');
    }
}
