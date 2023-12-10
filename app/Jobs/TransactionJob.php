<?php

namespace App\Jobs;

use App\Mail\AdminTransactionMail;
use App\Mail\TransactionMail;
use App\Models\Transactions;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class TransactionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public Transactions $transaction;

    public function __construct(Transactions $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->transaction->user->email)->send(new TransactionMail($this->transaction));
        Mail::to($this->transaction->user->email)->send(new AdminTransactionMail($this->transaction));
    }
}
