<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            // SendEmailVerificationNotification::class,
            'App\Listeners\SendNewRegistrationNotification'
        ],
        'App\Event\NewDeposit' => [
            'App\Listeners\SendNewDepositNotification',
            'App\Listeners\SendReferralDepositNotification',
        ],
        'App\Event\NewWithdrawal' => [
            'App\Listeners\SendNewWithdrawalNotification',
        ],
        'App\Event\UserProfitUpdate' => [
            'App\Listeners\SendProfitUpdateNotification',
        ],
        'App\Event\ContractConcluded' => [
            'App\Listeners\SendConclusionNotification',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
