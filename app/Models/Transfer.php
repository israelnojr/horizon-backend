<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'receiverBank_id',
        'senderBank_id',
        'routing_numb',
        'amount',
        'charges',
        'ref',
        'desc',
        'type',
        'bank_address',
        'recipient_address',
        'recipient_name',
        'bank_name',
        'status',
        'isCredit'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}


