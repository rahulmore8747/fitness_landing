<?php

namespace App\Http\Controllers;

use App\Models\ContactFormEntry;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    //
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
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        $entry = new ContactFormEntry();
        $entry->name = $request->fullname;
        $entry->email = $request->email;
        $entry->phone = $request->phone;
        $entry->message = $request->message;
        $entry->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
