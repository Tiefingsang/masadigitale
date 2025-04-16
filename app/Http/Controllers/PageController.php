<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Service;
use App\Models\About;
//use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $slider= Slider::where('id',1)->first();
        $slider1= Slider::where('id',2)->first();
        $slider2= Slider::where('id',3)->get();
        
        

        $getServices= Service::get();
        $getAbouts= About::get();



        $data= [

            'slider'=>$slider,
            'slider1'=>$slider1,
            'slider2'=>$slider2,
            'getServices'=>$getServices,
            'getAbouts'=>$getAbouts,
        ];
        //dd($getServices);
        
        return view('pages.home.index', $data);
    }

    public function about(){
        return view('pages.apropos.index');
    }

    public function blogs(){
        return view('pages.blogs.index');
    }

    public function services(){
        return view('pages.services.index');
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
