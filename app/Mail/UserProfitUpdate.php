<?php

namespace App\Mail;

use App\Models\Investment;
use App\Models\Token;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserProfitUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $investment;
    public $token;
    public $profit;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Investment $investment, $profit)
    {
        $this->investment = $investment;
        $this->profit = $profit;
        $this->token = Token::findorFail($investment->token_id)->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.UserProfitUpdate');
    }
}
