<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        if($request->hasFile('image')){
            $profile_url = $request->name . '-' .   '-profile-' .  time().'.'.request()->image->getClientOriginalExtension();

            $profile_location = '/images/profile/';

            request()->image->move(public_path('/images/profile/'), $profile_url);

            $profile = Profile::find(1);
                $profile->name = $request->get('name');
                $profile->image = $profile_location . $profile_url;
                $profile->designation = $request->get('designation');
                $profile->dob = $request->get('dob');
                $profile->description = $request->get('description');
                $profile->phone = $request->get('phone');
                $profile->email = $request->get('email');
                $profile->skype = $request->get('skype');
                $profile->website = $request->get('website');
                $profile->linkedin = $request->get('linkedin');
                $profile->facebook = $request->get('facebook');
                $profile->twitter = $request->get('twitter');
                $profile->youtube = $request->get('youtube');
                $profile->instagram = $request->get('instagram');
        }else{
            $profile = Profile::find(1);
            $profile->name = $request->get('name');
            $profile->designation = $request->get('designation');
            $profile->dob = $request->get('dob');
            $profile->description = $request->get('description');
            $profile->phone = $request->get('phone');
            $profile->email = $request->get('email');
            $profile->skype = $request->get('skype');
            $profile->website = $request->get('website');
            $profile->linkedin = $request->get('linkedin');
            $profile->facebook = $request->get('facebook');
            $profile->twitter = $request->get('twitter');
            $profile->youtube = $request->get('youtube');
            $profile->instagram = $request->get('instagram');
        }
            $profile->save();
        return redirect('/edit');
    }
}
