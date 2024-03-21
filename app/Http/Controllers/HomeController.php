<?php

namespace App\Http\Controllers;

use App\Models\ContactFormEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        // Check for existing email in database
        // $existingEmail = ContactFormEntry::where('email', $validatedData['email'])->first();

        // if ($existingEmail) {
        //     return response()->json(['error' => 'Email already exists in our records.'], 422);
        // }

        // Prepare data for API request
        $body = [
            "name" => $validatedData['fullname'],
            "email" => $validatedData['email'],
            "message" => $validatedData['message'],
        ];
        $uuid = '1234'; // Replace with actual UUID
        $platform = 'Web'; // Replace with actual platform information

        // Make API request
        $response = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders(['UUID' => $uuid, 'Platform' => $platform])
            ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/contact/create', $body)
            ->json();
        // dd($response);
        // Handle API response
        if ($response) {
            return response()->json(['success' => $response], 200);
        } else {
            return response()->json(['error' => 'Error submitting form.'], 500);
        }
    }
}
