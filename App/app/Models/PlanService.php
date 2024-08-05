<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanService extends Model
{
    use HasFactory;


    protected $fillable = ['image', 'video', 'link', 'services_id'];

    public function services()
    {
        return $this->belongsTo(Services::class);
    }

    public function typeServices()
    {
        return $this->hasMany(TypeService::class);
    }
}
