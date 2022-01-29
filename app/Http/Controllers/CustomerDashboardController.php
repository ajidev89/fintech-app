<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    //

    public function showDashboard(){
        $user =  Auth::user();
        return view('dashboard.customer.dashboard',[ 'title' => 'Dashboard','user'=>$user]);
    }
}
