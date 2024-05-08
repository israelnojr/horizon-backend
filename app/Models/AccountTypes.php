<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'type',
    ];

    /**
     * Define the relationship with Account model.
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
