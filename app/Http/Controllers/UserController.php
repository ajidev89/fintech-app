<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function showLogin()
    {
        return view('auth.login',['title'=>'Log in']);
    }

    public function postLogin(Request $request)
    { 
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255|exists:users',
            'password' =>'required|string|min:8',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);    
    }

    public function showSignUp(){
        return view('auth.register',['title'=>'Sign up']); 
    }

    public function postSignup(Request $request){

        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' =>'required|string|min:8|confirmed',
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //Send Email
       // event(new Registered($user));

        return redirect()->route('login');

    }

    public function Logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function showForget(){
        return view('auth.forget',['title'=>'Forget Password']);    
    }

    public function postForgotPassword(Request $request){

        $request->validate([
            'email' => 'required|string|email|max:255|exists:users',
        ]);

        //Send Email
        $status = Password::sendResetLink($request->only('email'));
        
        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('success','We have emailed your password reset link!');
        }

        return back()->withErrors([
            'email' => 'Could not send email',
        ]);   
    }
    public function showChangePassword(){
        return view('auth.change',['title'=>'Change Password']);
    }
}
