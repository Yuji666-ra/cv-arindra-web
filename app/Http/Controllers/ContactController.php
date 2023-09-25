<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showContactForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Kirim email
        Mail::to('wahyu.aji.20@student.is.ittelkom-sby.ac.id')->send(new ContactMail($name, $email, $subject, $message));

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
}
