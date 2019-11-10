<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|max:255',
            'description' => "required|max:500"
        ]);
            $contact = Contact::find(1);
                $contact->address = $request->get('address');
                $contact->description = $request->get('description');
            $contact->save();
        return redirect('/edit');
    }

    public function mail(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $body = $request->body;
        Mail::to([env('MY_MAIL')])
        ->cc([env('MY_MAIL')])
        ->queue(new ContactUs($name, $email, $body));
        return Redirect()->back()->with('success', 'Your message successfully sent');
    }
}
