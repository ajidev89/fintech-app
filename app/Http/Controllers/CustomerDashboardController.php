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
        $pendingTransaction = Transactions::where('id', Auth::user()->id)->where('status','NOT_RECEIVED')->count();
        $recivedTransaction = Transactions::where('id', Auth::user()->id)->where('status','RECEIVED')->count();
        $processingTransaction = Transactions::where('id', Auth::user()->id)->where('status','PROCESSING')->count();
        $sentTransaction = Transactions::where('id', Auth::user()->id)->where('status','SENT')->count();
        $allTransaction = Transactions::where('id', Auth::user()->id)->count();

        
        return view('dashboard.customer.dashboard',[ 
            'title' => 'Dashboard',
            'pendingTransaction' =>  $pendingTransaction,
            'recivedTransaction' => $recivedTransaction,
            'processingTransaction' => $processingTransaction,
            'sentTransaction' => $sentTransaction,
            'allTransaction' => $allTransaction
        ]);
    }
}
