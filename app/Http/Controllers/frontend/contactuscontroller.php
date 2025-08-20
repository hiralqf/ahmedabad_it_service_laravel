<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Http; // Add this at the top
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsNotification;

class contactuscontroller extends Controller
{
    public function index(){
    $category = Category::where('is_active','1')->get();
    $footer_category = Category::where('is_active','1')->limit('6')->orderBy('id','desc')->get();
    $footer_products = \App\Models\Product::where('is_active','1')->orderBy('id','desc')->limit(5)->get();
    return view('frontend.contactus',compact('category','footer_category','footer_products')); 
        
    }

//contact us insert function 
    public function store_contactus(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|regex:/^[0-9]{10}$/|max:10',
        'email' => 'required|email|max:255',
        'message' => 'nullable|string|max:1000',
        'g-recaptcha-response' => 'required'
    ], [
        'name.required' => 'Full Name is required.',
        'phone.required' => 'Phone Number is required.',
        'phone.regex' => 'Phone Number must be exactly 10 digits.',
        'phone.max' => 'Phone Number cannot exceed 10 digits.',
        'email.required' => 'Email Address is required.',
        'email.email' => 'Please enter a valid email address.',
        'g-recaptcha-response.required' => 'Please complete the reCAPTCHA verification.'
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // reCAPTCHA verification
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe", // Test key
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    if (!$response->json('success')) {
        $errorCodes = $response->json('error-codes', []);
        $errorMessage = 'reCAPTCHA verification failed.';
        if (!empty($errorCodes)) {
            $errorMessage .= ' Error codes: ' . implode(', ', $errorCodes);
        }
        return redirect()->back()
            ->withErrors(['g-recaptcha-response' => $errorMessage])
            ->withInput();
    }

    // Store data in database
    ContactUs::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'message' => $request->message ?: null,
    ]);

    // Prepare form data for email
    $formData = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message,
    ];

    // Send email notification
    try {
        \Log::info('Contact Us: Attempting to send email to shaileshqf@gmail.com');
        \Log::info('Contact Us: Form data: ' . json_encode($formData));
        
        Mail::to('shaileshqf@gmail.com')->send(new ContactUsNotification($formData));
        \Log::info('Contact Us: Email sent successfully!');
    } catch (\Exception $e) {
        \Log::error('Contact Us: Email sending failed: ' . $e->getMessage());
        \Log::error('Contact Us: Email error details: ' . $e->getTraceAsString());
    }

    return redirect()->back()->with('success', 'Your message has been sent successfully! Thank you for contacting us.');
}
}
