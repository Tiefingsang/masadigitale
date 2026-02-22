<?php

namespace App\Http\Controllers;
use App\Notifications\NewContactMessage;
use Illuminate\Support\Facades\Notification;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Client;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Team;


class PageController extends Controller
{
    public function index(){
        // homepage data is relatively static, cache for one hour
        $slider = cache()->remember('home.slider.1', 60, fn() => Slider::find(1));
        $slider1 = cache()->remember('home.slider.2', 60, fn() => Slider::find(2));
        $slider2 = cache()->remember('home.slider.3', 60, fn() => Slider::find(3));

        $getClients = cache()->remember('home.clients', 60, fn() => Client::all());
        $getBlogs   = cache()->remember('home.blogs', 60, fn() => Blog::all());
        $getGallery = cache()->remember('home.gallery', 60, fn() => Gallery::all());

        $latestServices = cache()->remember('home.latest_services', 60, fn() => Service::latest()->take(3)->get());
        $getServices    = cache()->remember('home.services', 60, fn() => Service::all());
        $getAbouts      = cache()->remember('home.abouts', 60, fn() => About::all());
        $teamMembers    = cache()->remember('home.team_members', 60, fn() =>
            Team::where('is_active', true)
                ->orderBy('order')
                ->limit(4)
                ->get()
        );

        $data = [
            'latestServices' => $latestServices,
            'slider' => $slider,
            'slider1' => $slider1,
            'slider2' => $slider2,
            'getClients' => $getClients,
            'getServices' => $getServices,
            'getAbouts' => $getAbouts,
            'getBlogs' => $getBlogs,
            'getGallery' => $getGallery,
            'teamMembers' => $teamMembers,
        ];

        return view('pages.home.index', $data);
    }

    public function about(Request $request){
        $getAbouts = cache()->rememberForever('page.about', fn() => About::first() ?? new About(['description' => '']));
        $getServices = cache()->remember('page.about.services', 60, fn() => Service::all());

        $data = [
            'getAbouts' => $getAbouts,
            'getServices' => $getServices,
        ];

        return view('pages.apropos.index', $data);
    }

    public function blogs(){
        $blogs = cache()->remember('page.blogs.list', 60, fn() => Blog::all());
        return view('pages.blogs.index', ['blogs' => $blogs]);
    }

    public function blogsDetail(Request $request){
        $getBlogBySlug = cache()->remember("page.blogs.detail.{$request->slug}", 60, fn() => Blog::where('slug', $request->slug)->first());
        $recentBlogs = cache()->remember('page.blogs.recent', 60, fn() => Blog::latest()->take(5)->get());
        $categories = cache()->remember('page.blogs.categories', 60, fn() => \App\Models\Category::withCount('blogs')->get());

        return view('pages.blogs.show', compact('getBlogBySlug', 'recentBlogs', 'categories'));
    }

    public function services(){
        $getServices = cache()->remember('page.services.list', 60, fn() => Service::all());
        return view('pages.services.index', ['getServices' => $getServices]);
    }

    public function servicesDetail( Request $request){
        $serviceFindByTitle = cache()->remember("page.services.detail.{$request->slug}", 60, fn() => Service::where('slug', $request->slug)->first());
        $getServices = cache()->remember('page.services.list', 60, fn() => Service::all());

        return view('pages.services.show', compact('serviceFindByTitle', 'getServices'));
    }

    public function contact(){
        return view('pages.contacts.index');
    }

    public function contactStore(Request $request){
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'nullable|string',
        'message' => 'required|string',
    ], [
        'name.required' => 'Le nom est obligatoire.',
        'email.required' => 'L\'email est obligatoire.',
        'email.email' => 'Veuillez entrer une adresse email valide.',
        'message.required' => 'Le message est obligatoire.',

        'subject.string' => 'Le sujet doit contenir des caractères.',
    ]);

    // Enregistrement du contact
    $contact = Contact::create($validated);

    // Comme tu n’as qu’un seul admin → on prend le premier user
    /* $admin = User::first();
    if ($admin) {
        $admin->notify(new NewContactMessage($contact));
    } */

    return back()->with('success', '✅ Votre message a été envoyé avec succès.');
}



    public function team(){
        return view('pages.team.index');
    }

    public function gallery(){
        $getGallery = cache()->remember('page.gallery', 60, fn() => Gallery::all());
        return view('pages.gallery.index', ['getGallery' => $getGallery]);
    }


}
