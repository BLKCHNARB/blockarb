<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Token;
use App\Models\Plan;
use App\Models\User;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token_id',
        'plan_id',
        'amount',
        'profit',
        "performance_fee",
        'percentage',
        'duration'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function token()
    {
        return $this->belongsTo(Token::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
