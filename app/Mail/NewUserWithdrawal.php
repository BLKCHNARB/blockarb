<?php

namespace App\Mail;

use App\Models\Withdrawal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserWithdrawal extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $amount, $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Withdrawal $withdrawal)
    {
        $this->name = $withdrawal->user->first_name;
        $this->amount = $withdrawal->amount;
        $this->token = $withdrawal->token_id === 1 ? "USD" : ($withdrawal->token_id === 2 ? "BTC" : "ETH");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.NewUserWithdrawal');
    }
}
