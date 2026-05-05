<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\EducationalPhase;
use App\Models\Facility;
use App\Models\ContactQuery;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();
        $testimonials = Testimonial::where('is_featured', true)->get();
        $teamMembers = TeamMember::all();
        $educationalPhases = EducationalPhase::ordered()->get();

        return view('home', compact('services', 'testimonials', 'teamMembers', 'educationalPhases'));
    }

    public function services()
    {
        $services = Service::orderBy('order')->get();
        return view('services', compact('services'));
    }

    public function service(Service $service)
    {
        return view('service-detail', compact('service'));
    }

    public function about()
    {
        $teamMembers = TeamMember::all();
        return view('about', compact('teamMembers'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact()
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save contact query to database
        ContactQuery::create($validated);

        return back()->with('success', 'Thank you for your message. We will contact you soon!');
    }

    public function gallery()
    {
        $galleryItems = Gallery::orderBy('order')->get();
        return view('gallery', compact('galleryItems'));
    }

    public function admission()
    {
        return view('admission');
    }

    public function facilities()
    {
        $facilities = Facility::ordered()->get();
        return view('facilities', compact('facilities'));
    }

    public function examination()
    {
        return view('examination');
    }

    public function ourStaff()
    {
        $teamMembers = TeamMember::all();
        return view('our-staff', compact('teamMembers'));
    }

    public function ourBlog()
    {
        $blogs = Blog::orderBy('published_at', 'desc')->paginate(6);
        return view('our-blog', compact('blogs'));
    }
}
 