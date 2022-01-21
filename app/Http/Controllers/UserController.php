<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showLogin()
    {
        return view('auth.login',['title'=>'Log in']);
    }

    public function showSignUp(){
        return view('auth.register',['title'=>'Sign up']); 
    }

    public function showForget(){
        return view('auth.forget',['title'=>'Forget Password']);    
    }

    public function showChangePassword(){
        return view('auth.change',['title'=>'Change Password']);
    }
}
