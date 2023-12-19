<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'amount', 'purse', 'token_id', 'processed'
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
