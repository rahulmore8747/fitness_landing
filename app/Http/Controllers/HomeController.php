<?php

namespace App\Http\Controllers;

use App\Models\ContactFormEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\ContactFormRequest;

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

    public function storeContactForm(ContactFormRequest $request)
    {
        try {

            $validatedData = $request->validated();
            $body = [
                "name" => $validatedData['fullname'],
                "email" => $validatedData['email'],
                "message" => $validatedData['message'],
            ];
            $uuid = '1234';
            $platform = 'Web';

            // Make API request
            $response = Http::withBasicAuth('admin', 'mypcot')
                ->withHeaders(['UUID' => $uuid, 'Platform' => $platform])
                ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/contact/create', $body)
                ->json();
            // Handle API response
            if ($response) {
                return response()->json(['success' => $response], 200);
            } else {
                return response()->json(['error' => 'Error submitting form.'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error submitting form.'], 500);
        } 
    }
}
