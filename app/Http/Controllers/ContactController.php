<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'city'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'company' => 'required|string|max:150',
            'title'   => 'required|string|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        // Send email
        Mail::to('info@dataintuitions.com')->send(new ContactFormMail($validated));

        return back()->with('success', '✅ Your message has been sent successfully!');
    }
}
