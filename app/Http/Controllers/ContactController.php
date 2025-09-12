<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact-us'); // contact.blade.php (frontend form)
    }

    public function submit(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'service_type' => 'required|string',
            'healthcare_type' => 'required|string',
        ]);

        // Send email to your Gmail (recipient)
        // Change recipient email as needed
        $recipient = 'revivehp.info@gmail.com';

        Mail::to($recipient)->send(new ContactFormMail($validated));

        // Optionally send a copy to the user:
        // Mail::to($validated['email'])->send(new ContactFormMail($validated));

        return back()->with('success', 'Form submitted successfully. We will contact you soon.');
    }
}
