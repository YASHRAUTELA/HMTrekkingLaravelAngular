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
        $data=array('main_content'=>'Camp Gallery','head1'=>'Home','head2'=>'camp gallery');
        return view('camp_gallery')->with('data',$data);
    }

    /*
    *Showing the tourists gallery
    */
    public function display_tourists_pics(){
        $data=array('main_content'=>'Tourist Gallery','head1'=>'Home','head2'=>'tourist gallery');
        return view('tourist_gallery')->with('data',$data);;
    }

    /*
    *Showing the contact Us Form
    */
    public function display_contact_us(){
        $data=array('main_content'=>'Contact Us','head1'=>'Home','head2'=>'contact us');
        return view('contactUs')->with('data',$data);
    }
}
