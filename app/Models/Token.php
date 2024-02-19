<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan;
use App\Models\Investment;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address'
    ];

    public function plans() {
        return $this->belongsToMany(Plan::class, 'plan_tokens')->withTimestamps()->withPivot('maximum','minimum','percentage', 'id', 'duration', 'performance_fee');
    }

    public function investments() {
        return $this->hasMany(Investment::class);
    }
}
