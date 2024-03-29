<?php

namespace App\Http\Controllers;

use App\Jobs\TransactionJob;
use App\Models\User;
use App\Models\Currency;
use Illuminate\Support\Str;
use App\Models\Transactions;
use App\Services\PaystackService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{

    public PaystackService $payment;

    public function __construct(PaystackService $payment)
    {
        $this->payment = $payment;
    }

    public function showFunds(){
        $user = User::where('id', Auth::user()->id)->with('profile')->first();
        $currencies = Currency::where('status',true)->get();
        return view('dashboard.customer.transaction.create',[ 'title' => 'Send funds','user' => $user,'currencies'=>$currencies]);
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

        // //Add fee
       $transaction =  Transactions::create([
            'uuid' => Auth::user()->id,
            'reference_code'=> Str::random(6),
            'amount' => $request->amount,
            'recipentName' => $request->name,
            'purpose' => $request->purpose,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => "NOT_RECEIVED",
            'method' => $request->method,
            'currency_id' => $request->currency
        ]);

        TransactionJob::dispatchSync($transaction);

        // $response = $this->payment->initializePayment([
        //     "amount" => 2000 * 100,
        //     "email" => Auth::user()->email
        // ]);
        // return redirect()->away($response['data']['authorization_url']);
        return back()->with([
            'success' => "Successfully Created Transaction"
        ]);


    }
    
    public  function showTransaction()
    {
        $transactions = Transactions::where('uuid',Auth::user()->id)->with('currency')->latest()->paginate(10);
        info($transactions);
        return view('dashboard.customer.transaction.show',['title' => 'Transaction', 'transactions' => $transactions ]);
    }

    public function recieveWebhook(Request $request){


        $hash = hash_hmac('sha512', $request->getContent() , env("PAYSTACK_SECRET_KEY"));


        if ($request->header('X_PAYSTACK_SIGNATURE') ==  $hash) {
           
            if($request['event'] == 'charge.success' &&  Transactions::where('transaction_ref',$request['data']['reference'])->exists()){
                //dispatch(new HandlePaystackSuccess($request['data']['reference'],$request['data']['status']));
            }

            return response()->json([],200);
        }



    }
}
