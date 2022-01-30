<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile(){
        $user = User::where('id', Auth::user()->id)->with('profile')->first();
        return view('dashboard.customer.profile',[ 'title' => 'Dashboard','user'=>$user]);
    }

    public function postProfile(Request $request){
        
        $request->validate([
            'first' => 'required|string|max:50',
            'last' =>'required|string|max:50',
            'phone' => 'required|digits:11',
            'address' => 'required|string|max:50',
            'nin' => 'required|digits:10'
        ]);
        
        $profile = Profile::where('uuid', Auth::user()->id)->first();

        if(empty($profile)){
            Profile::create([
                'firstName' => $request->first,
                'lastName' => $request->last,
                'phoneNumber' =>$request->phone,
                'nin' => $request->nin,
                'address' => $request->address,
                'uuid' => Auth::user()->id
            ]);

            return back()->with([
                'success' => "Completed registeration"
            ]);
        }else{
            Profile::where('uuid', Auth::user()->id)
                ->update([
                    'firstName' => $request->first,
                    'lastName' => $request->last,
                    'phoneNumber' =>$request->phone,
                    'nin' => $request->nin,
                    'address' => $request->address,
                ]);
    
            return back()->with([
                'success' => "Successfully update profile"
            ]);
        }
     

    }

     
        
       
}
