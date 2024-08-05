<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeService extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'duration', 'created_at', 'plan_service_id'];

    public function planService()
    {
        return $this->belongsTo(PlanService::class);
    }

    public function userTypeServices()
    {
        return $this->hasMany(UserTypeService::class);
    }
}
