<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otc extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'token',
        'wallet'
    ];
}