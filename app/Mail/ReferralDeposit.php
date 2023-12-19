<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReferralDeposit extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $amount, $referralAmount, $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->user = $order->user;
        $this->amount = $order->amount;
        $this->referralAmount = $order->amount * env('REFERRAL_PERCENTAGE ');
        $this->token = $order->token_id === 1 ? "USD" : ($order->token_id === 2 ? "BTC" : "ETH");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ReferralDeposit');
    }
}
