<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TransparentFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validation
        $request->validate([
            'service_type'    => 'required',
            'healthcare_type' => 'required',
            'name'            => 'required|string|max:255',
            'email'           => 'required|email',
            'phone'           => 'required',
            'website'         => 'nullable|url',
        ]);

        // Send Email
        Mail::send('emails.transparent-form', ['data' => $request->all()], function($mail) {
            $mail->to('revivehp.info@gmail.com') // Gmail jahan response chahiye
                 ->subject('Client Service Request');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
