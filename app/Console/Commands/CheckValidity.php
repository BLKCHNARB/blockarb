<?php

namespace App\Console\Commands;

use App\Event\ContractConcluded;
use App\Models\Investment;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckValidity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:validity';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks the validity of an investment';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $investments = Investment::where('created_at', '=', Carbon::now()->subDays(31))->get();

        foreach ($investments as $investment) {
            event(new ContractConcluded($investment));
        }
    }
}
