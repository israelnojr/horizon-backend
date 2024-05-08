<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NextOfKin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'email', 'phone', 'relationship','job', 'id_front',
        'id_back',
        'ssn',
        'city',
        'zip_code',
        'address',
        'is_verified'
      ];
  
      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
