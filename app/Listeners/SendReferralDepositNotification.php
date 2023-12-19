<?php

namespace App\Listeners;

use App\Event\NewDeposit;
use App\Notifications\ReferralDeposit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendReferralDepositNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Event\NewDeposit  $event
     * @return void
     */
    public function handle(NewDeposit $event)
    {
        if($event->order->user->referrer) {
            $event->order->user->referrer->notify(new ReferralDeposit($event->order));
        }
    }
}