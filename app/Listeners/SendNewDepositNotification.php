<?php

namespace App\Listeners;

use App\Event\NewDeposit;
use App\Notifications\NewUserDeposit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewDepositNotification
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
        $event->order->user->notify(new NewUserDeposit($event->order));
    }
}