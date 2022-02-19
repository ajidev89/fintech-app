<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    //

    public function showDashboard(){
        $user = User::where('id', Auth::user()->id)->with('profile')->first();
        $transaction = Transactions::where('id', Auth::user()->id)->with('notReceived');
        return view('dashboard.customer.dashboard',[ 'title' => 'Dashboard','user'=>$user]);
    }
}
