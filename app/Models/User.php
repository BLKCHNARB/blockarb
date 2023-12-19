<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'age',
        'usinvestor',
        'investortype',
        'accredited',
        'hearabout',
        'capital',
        'lovetoknow',
        'document_front',
        'document_back',
        'referrer_id',
        'referral_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function referralLink() {
        return route('register', ['ref' => $this->referral_token]);
    }

    // public function referralToken() {
    //     return $this->referral_token;
    // }

    public function verifyUser()
    {
    return $this->hasOne('App\Models\VerifyUser');
    }

    public function withdrawals() {
        return $this->hasMany("App\Models\Withdrawal");
    }

    public function compounds() {
        return $this->hasMany("App\Models\Compound");
    }

    public function transfers() {
        return $this->hasMany("App\Models\Transfer");
    }

    public function investments() {
        return $this->hasMany("App\Models\Investment");
    }

    public function transactions() {
        return $this->hasMany("App\Models\Transaction");
    }

    public function topups() {
        return $this->hasMany("App\Models\Topup");
    }

    public function referrer() {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals() {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function rewards() {
        return $this->hasMany("App\Models\Reward");
    }

    public function deposits() {
        return $this->hasMany("App\Models\Deposit");
    }

    // public function invoices() {
    //     return $this->hasMany("App\Models\Invoice");
    // }

    public function generateTwoFactorCode() {
        $this->timestamps = false;
        $this->tfa_code = rand(100000, 999999);
        $this->tfa_code_expires_at = now()->addMinutes(10);
        $this->save();
    }

    public function resetTwoFactorCode() {
        $this->timestamps = false;
        $this->tfa_code = null;
        $this->tfa_code_expires_at = null;
        $this->save();
    }
}
