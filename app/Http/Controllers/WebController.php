<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return redirect()->route("login");
    }

    public function about(){
        return view('pages.about',[ 'title' => 'About']);
    }

    public function contact(){
        return view('pages.contact',[ 'title' => 'Contact']);
    }

    public function faqs(){
        return view('pages.faqs',[ 'title' => 'FAQs']);
    }
}
