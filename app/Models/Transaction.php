<?php

namespace App\Models;

use App\Models\Account;
use App\Models\Transfer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'category_id'
    ];

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
