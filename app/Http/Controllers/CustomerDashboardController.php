<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    //

    public function showDashboard(){
        return view('dashboard.customer.dashboard',[ 'title' => 'Dashboard']);
    }
}
