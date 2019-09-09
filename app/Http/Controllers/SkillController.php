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
            'skill_name' => 'required|max:255',
            'skill_value' => 'required'
        ]);

        $skill = skill::find($id);
        $skill->skill_name = $request->get('skill_name');
        $skill->skill_value = $request->get('skill_value');
        $skill->description = $request->get('description');
        $skill->save();
        return redirect('/edit');
    }
}
