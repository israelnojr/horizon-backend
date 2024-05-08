<?php

namespace App\Models;

use App\Models\CreditCard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provider extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cards()
    {
        return $this->hasMany(CreditCard::class);
    }
}
