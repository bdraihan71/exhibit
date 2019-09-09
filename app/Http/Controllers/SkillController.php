<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'skill_name' => 'required|max:255',
            'skill_value' => 'required'
        ]);

        $skill = new Skill([
            'skill_name' => $request->get('skill_name'),
            'skill_value' => $request->get('skill_value'),
            'description' => $request->get('description'),
        ]);

        $skill->save();
        return redirect('/edit');
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('/edit');
    }

    public function edit($id)
    {
        $skill = skill::find($id);
        return view('layouts.edit.skill', compact('skill'));
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
