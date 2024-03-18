<?php

namespace App\Http\Controllers;

use App\Models\ContactFormEntry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function terms()
    {
        return view('front.terms');
    }

    public function privacy()
    {
        return view('front.privacypolicy');
    }

    public function storeContactForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        // Check if the email already exists
        $existingEmail = ContactFormEntry::where('email', $validatedData['email'])->first();
        if ($existingEmail) {
            return redirect()->back()->with('error', 'Email already exists in our records.');
        }

        // Check if the phone number already exists
        $existingPhone = ContactFormEntry::where('phone', $validatedData['phone'])->first();
        if ($existingPhone) {
            return redirect()->back()->with('error', 'Phone number already exists in our records.');
        }

        // Create a new entry in the database
        $entry = new ContactFormEntry();
        $entry->name = $validatedData['fullname'];
        $entry->email = $validatedData['email'];
        $entry->phone = $validatedData['phone'];
        $entry->message = $validatedData['message'];
        $entry->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
