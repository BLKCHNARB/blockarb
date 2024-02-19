<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Token;
use App\Models\Investment;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function tokens() {
        return $this->belongsToMany(Token::class, 'plan_tokens')->withTimestamps()->withPivot('maximum','minimum','percentage', 'token_id', 'plan_id', 'id', 'duration', 'perfomance_fee');
    }

    public function investments() {
        return $this->hasMany(Investment::class);
    }
}