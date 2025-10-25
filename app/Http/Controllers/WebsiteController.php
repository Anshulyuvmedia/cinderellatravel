<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;

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
}
