<?php

namespace App\Console\Commands;

use App\Event\UserProfitUpdate;
use App\Models\Investment;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UpdateProfits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:profits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Performs hourly update of user profits';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $investments = Investment::where('updated_at', '<', Carbon::now()->subDay())->get();

        foreach ($investments as $investment) {
            if($investment->created_at > Carbon::now()->subMonths(6)) {
                if ($investment->user) {
                    $profit = ($investment->amount * $investment->percentage * 0.01) / 30;
                    $investment->profit += $profit;
                    
                    $investment->updated_at = Carbon::now();
                    $investment->save();
    
                    $token = $investment::findorFail($investment->token_id)->name;
    
                    event(new UserProfitUpdate($investment, $profit));
                    
                    $this->info('Message sent.');
                    Log::info('updated');
                }
            }

        }
        
    }
}
