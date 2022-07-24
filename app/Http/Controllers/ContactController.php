<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::to('seconds.tst@gmail.com')
        ->send(new ContactMail($contact));


        return redirect()->route('contact.index')
            ->with(['message' => 'Your inquiry has been completed.']);
    }
}
