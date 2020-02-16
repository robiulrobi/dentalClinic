<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('front.home.home');
    }

    public function About(){
        return view('front.about.about_content');
    }

    public function Service(){
        return view('front.service.service_content');
    }

    public function Gallery(){
        return view('front.gallery.gallery_content');
    }
}
