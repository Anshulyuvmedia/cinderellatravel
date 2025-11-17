<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationSubmitted;
use App\Mail\JobApplication;
use App\Mail\TravelBookingMail;
use App\Mail\Enquiry;
use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use function Illuminate\Log\log;

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

    public function enquiry(Request $request)
    {
        // Validate enquiry form data
       
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email3' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);
        // dd($validated);
        // Send email to admin with admin subject line
        Mail::to('devendrayuvmedia@gmail.com')->send(new Enquiry($validated, 'admin'));

        // Send confirmation email to customer with customer subject line
        Mail::to($validated['email3'])->send(new Enquiry($validated, 'customer'));

        
        return response()->json([
            'success' => true,
            'message' => 'Your enquiry has been submitted successfully. We will get back to you shortly.',
        ]);
    }
}
