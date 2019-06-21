<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;

class LoginController extends Controller
{
    // -----------------------
    // ------- Website  ------
    // -----------------------
    public function Login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|string',
        ]);
        $user = User::where('email','=',$request->email)->where('password','=',$request->password)->first();
        if($user != null)
        {
            if(Auth::loginUsingId($user->id))
            {
                return redirect('/');
            }
        }
        else {
            \Session::flash('loginError','');
            return redirect('/');
        }
    }
    // -----------------------
    // ------- FaceBook ------
    // -----------------------

    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallbackFacebook()
    {
        $user = Socialite::driver('facebook')->user();
        $user->name;

        // $user->token;
    }

    // -----------------------
    // ------- Google ------
    // -----------------------

    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallbackGoogle()
    {
        $userData = Socialite::driver('google')->stateless()->user();
        $result = $this->checkEmailExists($userData);
        //dd($result);
        if ($result == null) {
            //----- regis -------
            $user = new User();
            $user->name = $userData->name;
            $user->email = $userData->email;
            $user->img = $userData->avatar;
            $user->regisWith = 'google';
            $user->save();
            if(Auth::loginUsingId($user->id))
            {
                return redirect('/');
            }
        } else {
            $result->regisWith = 'google';
            $result->save();

            if(Auth::loginUsingId($result->id))
            {
                return redirect('/');
            }
        }
    }

    // ---------------------------------
    // ------- Check Email Exists ------
    // ---------------------------------
    private function checkEmailExists($user)
    {
        $email = User::where('email', '=', $user->email)->first();
        return $email;
    }

}
