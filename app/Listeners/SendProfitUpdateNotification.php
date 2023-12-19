<?php

namespace App\Listeners;

use App\Event\UserProfitUpdate;
use App\Notifications\UserProfitUpdate as NotificationsUserProfitUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendProfitUpdateNotification
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
     * @param  \App\Event\UserProfitUpdate  $event
     * @return void
     */
    public function handle(UserProfitUpdate $event)
    {
        $event->investment->user->notify(new NotificationsUserProfitUpdate($event->investment, $event->profit));
    }
}
