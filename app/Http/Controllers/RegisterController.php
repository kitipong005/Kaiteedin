<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|unique:posts|max:255',
            'name' => 'required|min:3',
            'password' => 'required|confirmed|min:6|regex:/^[\w-]*$/',
            'tel' => 'required|numeric',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user == null)
        {
            //--- don't have user exists
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->tel = $request->tel;
            $user->gender = $request->gender;
            $user->career = $request->career;
            $user->address = $request->address;
            $user->password = $request->password;
            $user->regisWith = 'website';
            $user->save();

            if(Auth::loginUsingId($user->id))
            {
                return redirect('/');
            }
        }
        else 
        {
            \Session::flash('loginError','');
            return redirect('/');
        }
        
    }

    //---------- check email exists is ajax ------------
    public function checkEmailExists(Request $request)
    {
        if($request->ajax())
        {
            $user = User::where('email','=',$request->email)->first();
            return response($user);
        }
    }
}
