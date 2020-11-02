<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } 
        catch (\Exception $e) {
            return redirect('/login');
        }

        if(explode("@", $user->email)[1] !== 'gmail.com'){
            return redirect()->to('/');
        }

        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            Auth::login($existingUser, true);
        } else {
            // create a new user
            $newUser = new User;
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->save();
            Auth::login($newUser, true);
        }
        return redirect()->action([HomeController::class, 'index']);
    }
}
