<?php

namespace App\Listeners;

use App\Event\NewWithdrawal;
use App\Notifications\NewUserWithdrawal;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewWithdrawalNotification
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
     * @param  \App\Event\NewWithdrawal  $event
     * @return void
     */
    public function handle(NewWithdrawal $event)
    {
        $event->withdrawal->user->notify(new NewUserWithdrawal($event->withdrawal));
    }
}
