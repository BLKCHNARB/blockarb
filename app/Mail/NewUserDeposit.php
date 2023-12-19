<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserDeposit extends Mailable
{
    use Queueable, SerializesModels;

    public $amount, $name, $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->amount = $order->amount;
        $this->name = $order->user->first_name;
        $this->token = $order->token_id === 1 ? "USD" : ($order->token_id === 2 ? "BTC" : "ETH");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.NewUserDeposit');
    }
}
