<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'country',
        'name',
        'ticker',
        'symbol',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
