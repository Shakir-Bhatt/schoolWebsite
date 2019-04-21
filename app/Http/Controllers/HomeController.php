<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function teacher()
    {
        return view('frontend_blades.teacher');
    }

    public function about_us()
    {
        return view('frontend_blades.about');
    }

    public function blog()
    {
        return view('frontend_blades.blog');
    }

    public function contact_us()
    {
        return view('frontend_blades.contact');
    }
}
