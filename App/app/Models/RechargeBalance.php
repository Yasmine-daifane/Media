<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RechargeBalance extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'date',
        'user_id',
        'payment_method',  // Add new fields here
        'payment_receipt',
        'comment',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
