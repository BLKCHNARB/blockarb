<?php

namespace App\Console;

use App\Console\Commands\CheckValidity;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\UpdateProfits::class,
        Commands\CheckValidity::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('update:profits')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('check:validity')->everyThirtyMinutes()->withoutOverlapping();
        // $schedule->command('update:profits')->everyThirtyMinutes();

        // $schedule->command('queue:restart')->everyFiveMinutes();
        $schedule->command('queue:work --stop-when-empty')->everyMinute()->withoutOverlapping();
        // $schedule->command('queue:work --stop-when-empty')->everyMinute()->withoutOverlapping();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
