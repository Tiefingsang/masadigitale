<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Service;
use App\Models\About;
use App\Models\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $slider= Slider::where('id',1)->first();
        $slider1= Slider::where('id',2)->first();
        $slider2= Slider::where('id',3)->get();

        //blog
        $getBlogs= Blog::get();


        $getServices= Service::get();
        $getAbouts= About::get();



        $data= [

            'slider'=>$slider,
            'slider1'=>$slider1,
            'slider2'=>$slider2,
            'getServices'=>$getServices,
            'getAbouts'=>$getAbouts,
            'getBlogs'=>$getBlogs,
        ];
        //dd($getServices);

        return view('pages.home.index', $data);
    }

    public function about(Request $request){
        $getAbouts= About::first();

        $data= [

            'getAbouts'=>$getAbouts,

        ];
        return view('pages.apropos.index', $data);
    }

    public function blogs(){
        return view('pages.blogs.index');
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

    public function team(){
        return view('pages.team.index');
    }

    public function gallery(){
        return view('pages.gallery.index');
    }




}
