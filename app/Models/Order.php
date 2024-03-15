<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Token;
use App\Models\Plan;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "token_id",
        "plan_id",
        "amount",
        "address",
        "percentage",
        "performance_fee",
        "duration",
        "status"
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function token() {
        return $this->belongsTo(Token::class);
    }

    public function plan() {
        return $this->belongsTo(Plan::class);
    }
}
