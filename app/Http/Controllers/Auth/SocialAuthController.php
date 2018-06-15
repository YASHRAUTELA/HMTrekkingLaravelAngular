<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\User;

class SocialAuthController extends Controller
{
    /*
	*redirect the user to oauth provider
	*/
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /*
	*obtain the user information from provider. check if already exist. if exist log them in otherwise create new user and then log in. after that redirect user to homepage
	*/
    public function handleProviderCallback($provider)
    {
    	
        $user = Socialite::driver($provider)->user();
        /*dd($user);*/
        $authUser = $this->findOrCreateUser($user, $provider);


        Auth::login($authUser, true);
        return redirect('/home');
        // return redirect($this->redirectTo);
    }

    /*
    *if a user has registered before then return user otherwise create new user
    */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        
        if ($authUser) {
            return $authUser;
        }

        if($user->getName()==null){
            echo $user->getNickname();
            
            return User::create([
                'name'     => $user->getNickname(),
                'email'    => $user->getEmail(),
                'provider' => $provider,
                'provider_id' => $user->getId(),
                'avatar'=>$user->getAvatar(),
                'password'=>'',
                'access_token'=>$user->token
            ]);
        }
        else{
            return User::create([
                'name'     => $user->getName(),
                'email'    => $user->getEmail(),
                'provider' => $provider,
                'provider_id' => $user->getId(),
                'avatar'=>$user->getAvatar(),
                'password'=>'',
                'access_token'=>$user->token
            ]);
        }
        //show msg of name of the user is mandatory
    }
}
