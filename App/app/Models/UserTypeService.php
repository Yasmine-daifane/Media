<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeService extends Model
{
    use HasFactory;


    protected $fillable = ['pricefinal', 'date', 'user_id', 'type_service_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function typeService()
    {
        return $this->belongsTo(TypeService::class);
    }
}
