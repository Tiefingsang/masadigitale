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


class PageController extends Controller
{
    public function index(){
        $slider= Slider::where('id',1)->first();
        $slider1= Slider::where('id',2)->first();
        $slider2= Slider::where('id',3)->first();

        //blog
        $getClients= Client::get();
        $getBlogs= Blog::get();
        //gallery
        $getGallery= Gallery::get();

        //services
        $latestServices = Service::latest()->take(3)->get();

        $getServices= Service::get();
        $getAbouts= About::get();



        $data= [

            'latestServices'=>$latestServices,
            'slider'=>$slider,
            'slider1'=>$slider1,
            'slider2'=>$slider2,
            'getClients'=>$getClients,
            'getServices'=>$getServices,
            'getAbouts'=>$getAbouts,
            'getBlogs'=>$getBlogs,
            'getGallery'=>$getGallery,
        ];
        //dd($data);

        return view('pages.home.index', $data);
    }

    public function about(Request $request){
        $getAbouts= About::first();
        $getServices= Service::get();

        $data= [

            'getAbouts'=>$getAbouts,
            'getServices'=>$getServices,

        ];
        //dd($data);
        return view('pages.apropos.index', $data);
    }

    public function blogs(){
        $blogs=Blog::get();

        $data= ['blogs'=> $blogs
        ];
        //dd($data);
        return view('pages.blogs.index', $data);
    }

    public function blogsDetail(Request $request){
        $getBlogBySlug= Blog::where('slug', $request->slug)->first();

        $data= [
            'getBlogBySlug'=>$getBlogBySlug,
        ];

        //dd($getBlogBySlug->title);
        return view('pages.blogs.show', $data);

    }

    public function services(){
        $getServices= Service::get();
        //
    //dd($getServices);

        $data= [
            'getServices'=>$getServices,
        ];


        return view('pages.services.index', $data);
    }

    public function servicesDetail( Request $request){
        $serviceFindByTitle= Service::where('id','like','%'.$request->id.'%')->first();
        $getServices= Service::get();
        //zdd($serviceFindByTitle);

        $data=[
            'serviceFindByTitle'=>$serviceFindByTitle,
            'getServices'=>$getServices,
        ];

        return view('pages.services.show', $data);
    }

    public function contact(){
        return view('pages.contacts.index');
    }

    public function contactStore(Request $request)
{
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
        $getGallery= Gallery::get();
        //dd($getGallery);

        $data=[
            'getGallery'=>$getGallery,

        ];

        return view('pages.gallery.index', $data);


    }




}
