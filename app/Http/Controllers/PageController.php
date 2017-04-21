<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function showServices(){
        return view('services');
    }

    public function showNew(){
        return view('new');
    }

    public function showContact(){
        return view('contact');
    }

    public function showBlog(){
        return view('blog');
    }

    public function showAbout(){
        return view('blog');
    }
}


