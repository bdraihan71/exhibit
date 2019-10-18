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
        $education = Project::find($id);
        $education->delete();
        return redirect('/edit');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('layouts.edit.project', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required|max:500',
        ]);

        $project_url = $request->name . '-' .   '-profile-' .  time().'.'.request()->image->getClientOriginalExtension();

        $project_location = '/images/project/';

        request()->image->move(public_path('/images/project/'), $project_url);

        $project = Project::find($id);
        $project->name = $request->get('name');
        $project->image = $project_location . $project_url;
        $project->description = $request->get('description');
        $project->save();
        return redirect('/edit');
    }
}
