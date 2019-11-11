<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

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
        return redirect('/edit')->with('success', 'Your personal information has been successfully updated');
    }

    public function getPassword()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        return view('password.edit', compact('user'));
    }

    public function newUpdatePassword(Request $request)
    {
        $id = $request->user_id;
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'retype_password' => 'required|min:8',
        ]);

        $user = User::find($id);

        $data = $request->all();
         $user = auth()->user();
        if (!Hash::check($data['old_password'], $user->password)) {
            return back()->with('error', 'The specified password does not match the database password');
        } else {
            if($request->old_password == $request->new_password && $request->new_password == $request->retype_password  )
            {
                Session::flash('error', 'Sorry, New password and old password match!');
                return redirect()->back();
            }elseif($request->new_password == $request->retype_password)
            {
                $user->password = bcrypt($request->get('new_password'));

            }else{
                Session::flash('error', 'Sorry, New password and retype password not match!');
                return redirect()->back();
            }
        }
        $user->save();

        return redirect('/edit')->with('success', 'password change successfully');
    }
}
