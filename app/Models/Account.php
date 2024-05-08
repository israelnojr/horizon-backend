<?php

namespace App\Models;

use App\Models\User;
use App\Models\Currency;
use App\Models\Transaction;
use App\Models\AccountTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_number',
        'currency_id',
        'ledger_balance',
        'available_balance',
        'status',
        'is_shielded',
        'hasOfficer'
    ];

    /**
     * Define the relationship with User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define the relationship with AccountTypes model.
     */
    public function accountType()
    {
        return $this->hasOne(AccountTypes::class);
    }

    public function currency()
    {
        return $this->hasOne(Currency::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
