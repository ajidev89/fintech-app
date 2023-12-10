<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'trxCode',
        'amount',
        'recipentName',
        'purpose',
        'phone',
        'email',
        'method',
        'status',
        'currency_id',
        'bank',
        'bankAccountNo',
        "reference_code"
    ];

    public function currency() : HasOne
    {
        return $this->hasOne(Currency::class, 'id' ,'currency_id');
    }


    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id' ,'uuid');
    }


    
}
