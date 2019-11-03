<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'cv' => "required|mimes:pdf,jpeg|max:10000"
        ]);

        if($request->hasFile('cv')){
            $profile_url =  time().'.'.request()->cv->getClientOriginalExtension();

            $profile_location = '/images/';

            request()->cv->move(public_path('/images/'), $profile_url);

            $footer = Footer::find(1);
                $footer->copyright = $request->get('copyright');
                $footer->cv = $profile_location . $profile_url;
        }else{
            $footer = Footer::find(1);
                $footer->copyright = $request->get('copyright');;
        }
            $footer->save();
        return redirect('/edit');
    }
}
