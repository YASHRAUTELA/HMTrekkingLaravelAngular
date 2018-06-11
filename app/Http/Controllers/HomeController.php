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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /*
    *Showing the camp gallery
    */
    public function display_camp_pics(){
        return view('camp_gallery');
    }

    /*
    *Showing the tourists gallery
    */
    public function display_tourists_pics(){
        return view('tourist_gallery');
    }

    /*
    *Showing the contact Us Form
    */
    public function display_contact_us(){
        return view('contactUs');
    }
}
