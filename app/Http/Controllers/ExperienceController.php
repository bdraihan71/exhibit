<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'join' => 'required',
            'company_name' => 'required|max:255',
            'designation' => 'required|max:255',
            'description' => 'required|max:500',
        ]);

        $experience = new Experience([
            'join' => $request->get('join'),
            'disjoin' => $request->get('disjoin'),
            'company_name' => $request->get('company_name'),
            'designation' => $request->get('designation'),
            'description' => $request->get('description'),
        ]);

        $experience->save();
        return redirect('/edit');
    }

    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect('/edit');
    }

    public function edit($id)
    {
        $experience = Experience::find($id);
        return view('layouts.edit.experience', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'join' => 'required',
            'company_name' => 'required|max:255',
            'designation' => 'required|max:255',
            'description' => 'required|max:500',
        ]);

        $experience = Experience::find($id);
        $experience->join = $request->get('join');
        $experience->disjoin = $request->get('disjoin');
        $experience->company_name = $request->get('company_name');
        $experience->designation = $request->get('designation');
        $experience->description = $request->get('description');
        $experience->save();
        return redirect('/edit');
    }
}
