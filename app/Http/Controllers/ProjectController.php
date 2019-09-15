<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required|max:500',
        ]);

        $project_url = $request->name . '-' .   '-profile-' .  time().'.'.request()->image->getClientOriginalExtension();

            $project_location = '/images/project/';

            request()->image->move(public_path('/images/project/'), $project_url);

        $project = new Project([
            'name' => $request->get('name'),
            'image' => $project_location . $project_url,
            'description' => $request->get('description'),
        ]);

        $project->save();
        return redirect('/edit');
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect('/edit');
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
        return redirect('/edit');
    }
}
