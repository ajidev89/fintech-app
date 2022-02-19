<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Currency;
use Illuminate\Support\Str;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    public function showFunds(){
        $user = User::where('id', Auth::user()->id)->with('profile')->first();
        $currencies = Currency::all();
        return view('dashboard.customer.transaction.create',[ 'title' => 'Dashboard','user' => $user,'currencies'=>$currencies]);
    }


    public function postTransaction(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|digits:11',
            'currency' => 'required',
            'amount' => 'required|numeric',
            'purpose'=> 'required|string|max:255',
            'method' => 'in:transfer,cash'
        ]);
        //Add fee
        Transactions::create([
            'uuid' => Auth::user()->id,
            'trxCode'=> Str::random(6),
            'amount' => $request->amount,
            'recipentName' => $request->name,
            'purpose' => $request->purpose,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => "NOT-RECEIVED",
            'method' => $request->method,
            'currency' => $request->currency
        ]);

        return back()->with([
            'success' => "Successfully sent fund"
        ]);


    }
    
    public  function showTransaction()
    {
        $transactions = Transactions::where('uuid',Auth::user()->id)->get();
        return view('dashboard.customer.transaction.show',['title' => 'Transaction', 'transactions' => $transactions ]);
    }
}
