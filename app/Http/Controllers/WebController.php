<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index() {
        return view('welcome', ['title' => 'Home']);
    }

    public function contact() {
        return view('contact', ['title' => 'Contact']);
    }

    public function about() {
        return view('about', ['title' => 'About']);
    }
}
