<?php

namespace App\Http\Controllers;

use App\Mail\JobApplication;
use App\Mail\TravelBookingMail;
use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    //
    public function home()
    {
        $blogs = Blog::latest()->take(3)->get();
        // dd( $blogs);
        return view('frontend.home', compact('blogs'));
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function careers()
    {
        return view('frontend.careers');
    }
    public function blogs()
    {
        $blogs = Blog::orderByDesc('created_at')->paginate(6);
        return view('frontend.blogs', compact('blogs'));
    }
    public function blogdetail($id)
    {
        $details = Blog::find($id);
        $recentblogs = Blog::orderBy('created_at', 'desc')->get();
        return view('frontend.blogdetail', compact('details', 'recentblogs'));
    }
    public function demo()
    {
        return view('frontend.demo');
    }
    public function worldmap()
    {
        return view('frontend.worldmap');
    }

    public function contactus()
    {
        return view('frontend.contactus');
    }

    public function europe()
    {
        return view('frontend.destinations.europe');
    }
    public function asia()
    {
        return view('frontend.destinations.asia');
    }
    public function dubai()
    {
        return view('frontend.destinations.dubai');
    }
    public function usa()
    {
        return view('frontend.destinations.usa');
    }
    public function canada()
    {
        return view('frontend.destinations.canada');
    }
    public function africa()
    {
        return view('frontend.destinations.africa');
    }

    public function airticketing()
    {
        return view('frontend.services.airticketing');
    }
    public function travelvisa()
    {
        return view('frontend.services.travelvisa');
    }
    public function travelinsurance()
    {
        return view('frontend.services.travelinsurance');
    }
    public function hotelbooking()
    {
        return view('frontend.services.hotelbooking');
    }
    public function holidaypackges()
    {
        return view('frontend.services.holidaypackges');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate form data
        $validated = $request->validate([
            'full_name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|numeric|digits:10',
            'destination' => 'required|string|in:Bali,Paris,Maldives,Dubai,Other',
            'travel_from' => 'required|date|after_or_equal:today',
            'travel_to' => 'required|date|after:travel_from',
            'travelers' => 'required|string|in:1,2,Family,Group',
            'travel_type' => 'required|string|in:Honeymoon,Adventure,Family,Luxury,Budget',
        ]);
    
       
        // Send email to customer
        Mail::to($validated['email'])->send(new TravelBookingMail($validated, $validated['email']));

        // Optional: Send notification to admin
        Mail::to('devendrayuvmedia@gmail.com')->send(new TravelBookingMail($validated , 'devendrayuvmedia@gmail.com'));

        return response()->json([
            'success' => true,
            'message' => 'Travel booking request submitted successfully. Check your email for confirmation.',
          
        ]);
    }
    public function jobsubmit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'full_name' => 'required|string|min:3|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^\d{3}-\d{3}-\d{4}$/',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // Max 5MB
            'service_type' => 'required|in:Air Ticketing,Sales & Marketing,Accountant',
            'message' => 'required|string|min:10|max:1000',
        ], [
            'full_name.required' => 'Full name is required.',
            'full_name.min' => 'Full name must be at least 3 characters.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone must be in format: 123-456-7890',
            'resume.required' => 'Resume file is required.',
            'resume.mimes' => 'Resume must be PDF, DOC, or DOCX file.',
            'resume.max' => 'Resume file size must not exceed 5MB.',
            'service_type.required' => 'Please select a service type.',
            'message.required' => 'Cover letter is required.',
            'message.min' => 'Cover letter must be at least 10 characters.',
        ]);

        // Store the resume file
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Prepare email data
        $mailData = [
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service_type' => $validated['service_type'],
            'message' => $validated['message'],
            'resume_path' => storage_path('app/public/' . $resumePath),
            'resume_name' => $request->file('resume')->getClientOriginalName(),
        ];

        try {
            // Send email to admin with resume attachment
            Mail::to(config('mail.admin_email'))
                ->send(new JobApplication($mailData));
            return back()->with('success', 'Your application has been submitted successfully! Check your email for confirmation.');
        } catch (\Exception $e) {
            \Log::error('Job application email failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to send application. Please try again later.');
        }
    }
}
