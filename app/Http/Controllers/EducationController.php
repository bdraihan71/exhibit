<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'start' => 'required',
            'institution_name' => 'required|max:255',
            'degree' => 'required|max:255',
            'description' => 'max:500',
        ]);

        $education = new Education([
            'start' => $request->get('start'),
            'end' => $request->get('end'),
            'institution_name' => $request->get('institution_name'),
            'degree' => $request->get('degree'),
            'description' => $request->get('description'),
        ]);

        $education->save();
        return redirect('/edit')->with('success', 'Your educational information has been successfully saved');
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect('/edit')->with('success', 'Your educational information has been successfully deleted');
    }

    public function edit($id)
    {
        $education = Education::find($id);
        return view('layouts.edit.education', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'start' => 'required',
            'institution_name' => 'required|max:255',
            'degree' => 'required|max:255',
            'description' => 'required|max:500',
        ]);

        $education = Education::find($id);
        $education->start = $request->get('start');
        $education->end = $request->get('end');
        $education->institution_name = $request->get('institution_name');
        $education->degree = $request->get('degree');
        $education->description = $request->get('description');
        $education->save();
        return redirect('/edit')->with('success', 'Your educational information has been successfully updated');
    }
}
