<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.home.index');
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
}
