<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RechargeBalance extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'duration', 'date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
