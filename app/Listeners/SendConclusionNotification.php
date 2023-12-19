<?php

namespace App\Listeners;

use App\Event\ContractConcluded;
use App\Notifications\ContractConclusion;
use App\Notifications\NewContractConclusion;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendConclusionNotification
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
     * @param  \App\Event\ContractConcluded  $event
     * @return void
     */
    public function handle(ContractConcluded $event)
    {
        $event->investment->user->notify(new NewContractConclusion($event->investment));
    }
}
