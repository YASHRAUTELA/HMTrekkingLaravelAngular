<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected function header(){
        $total=User::all()->count();

        $socialite_user=User::where('provider_id','!=',null)->get()->count();
        
        $user=['total'=>$total,'socialite_user'=>$socialite_user];

        return $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=$this->header();
        
        return view('admin.default')->with('user',$user);
    }

    public function show_all_user(){
        
        $all_user=User::all();

        $user=$this->header();

        // print_r($all_user->count());
        // exit;
        if($all_user->count()){
            $other_info=['all_user'=>$all_user];

            $user=array_merge($user,$other_info);
        }

        $other_info=['category'=>'All User','color'=>'#00c0ef'];

        $user=array_merge($user,$other_info);
        

        // print_r($user);
        // exit;

        return view('admin.allUsers')->with('user',$user);
        
    }

    public function show_socialite_user(){

        $user=$this->header();

        $all_socialite_user=User::where('provider_id','!=',null)->get();

        $condition=$all_socialite_user->count();

        if($condition){
            $other_info=['all_socialite_user'=>$all_socialite_user];

            $user=array_merge($user,$other_info);
        }

        $other_info=['category'=>'Socialite User','color'=>'#00a65a'];

        $user=array_merge($user,$other_info);
        
        return view('admin.socialiteUsers')->with('user',$user);

    }

    public function show_non_socialite_user(){
        $user=$this->header();//calling protected header function 

        $all_non_socialite_user=User::where('provider_id','=',null)->get();

        $condition=$all_non_socialite_user->count();

        if($condition){
            $other_info=['all_non_socialite_user'=>$all_non_socialite_user];

            $user=array_merge($user,$other_info);
        }

        $other_info=['category'=>'Non Socialite User','color'=>'#f39c12'];

        $user=array_merge($user,$other_info);
        
        return view('admin.nonSocialiteUsers')->with('user',$user);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
