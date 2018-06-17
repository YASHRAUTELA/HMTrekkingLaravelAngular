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
        $data=array('main_content'=>'Gallery','head1'=>'Home','head2'=>'Gallery','head3'=>'Our Camp');
        return view('camp_gallery')->with('data',$data);
    }

    /*
    *Showing the tourists gallery
    */
    public function display_tourists_pics(){
        $data=array('main_content'=>'Gallery','head1'=>'Home','head2'=>'Gallery','head3'=>'Our Tourists');
        return view('tourist_gallery')->with('data',$data);;
    }

    /*
    *Showing the contact Us Form
    */
    public function display_contact_us(){
        $data=array('main_content'=>'Contact Us','head1'=>'Home','head2'=>'contact us');
        return view('contactUs')->with('data',$data);
    }

    /*
    *Showing the About Us Form
    */
    public function display_about_us(){
        $data=array('main_content'=>'About Us','head1'=>'Home','head2'=>'about us');
        return view('aboutUs')->with('data',$data);   
    }

    /*Taking country data*/
    public function getCountry(){
        $path=storage_path('app/public/country.json');
        $data = json_decode(file_get_contents($path), true);
        // $path=storage_path('app/public/country.json');
        /*print_r($country_data);
        exit;*/
        // $country_data=json_decode($path,true);

        return response()->json($data);
        
    }
}
