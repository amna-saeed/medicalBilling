<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class BgFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required',
            'business' => 'required',
            'message' => 'required',
        ]);

        // Email send
        Mail::send('emails.bg-form', ['data' => $request->all()], function($mail) use ($request) {
            $mail->to('revivehp.info@gmail.com') // jis Gmail par email chahiye
                 ->subject('Client Contact');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
