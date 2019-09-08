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
}
