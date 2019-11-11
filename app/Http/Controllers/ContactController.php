<?php

namespace App\Http\Controllers;

use App\Contact;
use App\EMail;
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'body' => 'required|max:255',
        ]);

        $name = $request->name;
        $email = $request->email;
        $body = $request->body;
        Mail::to([env('MY_MAIL')])
        ->cc([env('MY_MAIL')])
        ->queue(new ContactUs($name, $email, $body));

        $mymail = new EMail([
            'name' => $name ,
            'email' =>  $email,
            'body' => $body,
        ]);

        $mymail->save();
        return Redirect()->back()->with('success', 'Your message successfully sent');
    }

    public function showAll()
    {
        $mails = EMail::orderBy('created_at', 'desc')->get();
        return view('message.index', compact('mails'));
    }
}
