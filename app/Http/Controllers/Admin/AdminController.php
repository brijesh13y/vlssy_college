<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\ContactQuery;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $queriesCount = ContactQuery::count();
        $unreadCount = ContactQuery::where('is_read', false)->count();
        $staffCount = TeamMember::count();
        $testimonialsCount = Testimonial::count();
        $blogsCount = Blog::count();
        $galleryCount = Gallery::count();
        $queries = ContactQuery::orderBy('created_at', 'desc')->limit(5)->get();

        return view('admin.dashboard', compact(
            'queriesCount',
            'unreadCount',
            'staffCount',
            'testimonialsCount',
            'blogsCount',
            'galleryCount',
            'queries'
        ));
    }

    // Services
    public function servicesIndex()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function servicesCreate()
    {
        return view('admin.services.form');
    }

    public function servicesStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:10',
            'order' => 'required|integer',
        ]);

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service added successfully!');
    }

    public function servicesEdit(Service $service)
    {
        return view('admin.services.form', compact('service'));
    }

    public function servicesUpdate(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $service->id,
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:10',
            'order' => 'required|integer',
        ]);

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully!');
    }

    public function servicesDestroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully!');
    }

    // Staff Members
    public function staffIndex()
    {
        $staffMembers = TeamMember::all();
        return view('admin.staff.index', compact('staffMembers'));
    }

    public function staffCreate()
    {
        return view('admin.staff.form');
    }

    public function staffStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'email' => 'nullable|email',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        TeamMember::create($validated);

        return redirect()->route('admin.staff.index')
            ->with('success', 'Staff member added successfully!');
    }

    public function staffEdit(TeamMember $member)
    {
        return view('admin.staff.form', compact('member'));
    }

    public function staffUpdate(Request $request, TeamMember $member)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'email' => 'nullable|email',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        $member->update($validated);

        return redirect()->route('admin.staff.index')
            ->with('success', 'Staff member updated successfully!');
    }

    public function staffDestroy(TeamMember $member)
    {
        $member->delete();

        return redirect()->route('admin.staff.index')
            ->with('success', 'Staff member deleted successfully!');
    }

    // Testimonials
    public function testimonialsIndex()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function testimonialsCreate()
    {
        return view('admin.testimonials.form');
    }

    public function testimonialsStore(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'is_featured' => 'boolean',
        ]);

        $validated['is_featured'] = $request->has('is_featured') ? 1 : 0;

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial added successfully!');
    }

    public function testimonialsEdit(Testimonial $testimonial)
    {
        return view('admin.testimonials.form', compact('testimonial'));
    }

    public function testimonialsUpdate(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'is_featured' => 'boolean',
        ]);

        $validated['is_featured'] = $request->has('is_featured') ? 1 : 0;

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully!');
    }

    public function testimonialsDestroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully!');
    }

    // Blogs
    public function blogsIndex()
    {
        $blogs = Blog::orderBy('published_at', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function blogsCreate()
    {
        return view('admin.blogs.form');
    }

    public function blogsStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'required|date',
        ]);

        if ($request->hasFile('featured_image')) {
            $filename = time() . '.' . $request->featured_image->extension();
            $request->featured_image->move(public_path('images'), $filename);
            $validated['featured_image'] = $filename;
        }

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post created successfully!');
    }

    public function blogsEdit(Blog $blog)
    {
        return view('admin.blogs.form', compact('blog'));
    }

    public function blogsUpdate(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'required|date',
        ]);

        if ($request->hasFile('featured_image')) {
            $filename = time() . '.' . $request->featured_image->extension();
            $request->featured_image->move(public_path('images'), $filename);
            $validated['featured_image'] = $filename;
        }

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post updated successfully!');
    }

    public function blogsDestroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post deleted successfully!');
    }

    // Gallery
    public function galleryIndex()
    {
        $galleryItems = Gallery::orderBy('order')->get();
        return view('admin.gallery.index', compact('galleryItems'));
    }

    public function galleryCreate()
    {
        return view('admin.gallery.form');
    }

    public function galleryStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:100',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        Gallery::create($validated);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Gallery item added successfully!');
    }

    public function galleryEdit(Gallery $gallery)
    {
        return view('admin.gallery.form', compact('gallery'));
    }

    public function galleryUpdate(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:100',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        $gallery->update($validated);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Gallery item updated successfully!');
    }

    public function galleryDestroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Gallery item deleted successfully!');
    }

    // Educational Phases
    public function phasesIndex()
    {
        $phases = \App\Models\EducationalPhase::ordered()->get();
        return view('admin.phases.index', compact('phases'));
    }

    public function phasesCreate()
    {
        return view('admin.phases.form');
    }

    public function phasesStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:10',
            'description' => 'required|string',
            'features' => 'required|array',
            'features.*' => 'string',
            'order' => 'required|integer',
        ]);

        $validated['features'] = array_filter($validated['features']);
        \App\Models\EducationalPhase::create($validated);

        return redirect()->route('admin.phases.index')
            ->with('success', 'Educational phase created successfully!');
    }

    public function phasesEdit(\App\Models\EducationalPhase $phase)
    {
        return view('admin.phases.form', compact('phase'));
    }

    public function phasesUpdate(Request $request, \App\Models\EducationalPhase $phase)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:10',
            'description' => 'required|string',
            'features' => 'required|array',
            'features.*' => 'string',
            'order' => 'required|integer',
        ]);

        $validated['features'] = array_filter($validated['features']);
        $phase->update($validated);

        return redirect()->route('admin.phases.index')
            ->with('success', 'Educational phase updated successfully!');
    }

    public function phasesDestroy(\App\Models\EducationalPhase $phase)
    {
        $phase->delete();

        return redirect()->route('admin.phases.index')
            ->with('success', 'Educational phase deleted successfully!');
    }

    // Facilities
    public function facilitiesIndex()
    {
        $facilities = \App\Models\Facility::ordered()->get();
        return view('admin.facilities.index', compact('facilities'));
    }

    public function facilitiesCreate()
    {
        return view('admin.facilities.form');
    }

    public function facilitiesStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:10',
            'description' => 'required|string',
            'order' => 'required|integer',
        ]);

        \App\Models\Facility::create($validated);

        return redirect()->route('admin.facilities.index')
            ->with('success', 'Facility created successfully!');
    }

    public function facilitiesEdit(\App\Models\Facility $facility)
    {
        return view('admin.facilities.form', compact('facility'));
    }

    public function facilitiesUpdate(Request $request, \App\Models\Facility $facility)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:10',
            'description' => 'required|string',
            'order' => 'required|integer',
        ]);

        $facility->update($validated);

        return redirect()->route('admin.facilities.index')
            ->with('success', 'Facility updated successfully!');
    }

    public function facilitiesDestroy(\App\Models\Facility $facility)
    {
        $facility->delete();

        return redirect()->route('admin.facilities.index')
            ->with('success', 'Facility deleted successfully!');
    }

    // Contact Queries
    public function queriesIndex()
    {
        $queries = ContactQuery::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.queries.index', compact('queries'));
    }

    public function queriesShow(ContactQuery $query)
    {
        // Mark as read
        $query->update(['is_read' => true]);
        return view('admin.queries.show', compact('query'));
    }

    public function queriesDestroy(ContactQuery $query)
    {
        $query->delete();

        return redirect()->route('admin.queries.index')
            ->with('success', 'Query deleted successfully!');
    }
}