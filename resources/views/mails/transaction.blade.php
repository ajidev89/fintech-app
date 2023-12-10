<div>
    Hello {{ $transaction->user->profile->firstName }},
</div>

<div>
    Transaction was created successfully
</div>

<div>
  You want to {{ $transaction->currency->symbol }} {{ number_format($transaction->amount) }}
</div>

<div>
    Thanks <br>
    Hallifield
</div>
