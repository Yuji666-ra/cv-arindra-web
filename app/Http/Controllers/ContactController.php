<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller {

    public function index()
    {
        return view('contact');
    }
    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        Mail::to('info@arindraproduction.co.id')->send(new ContactMail($data));

        return redirect()->back()->with('message', 'Email telah terkirim!');
    }
}

