<?php

namespace App\Http\Livewire\User;

use App\Models\Deposit;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Home extends Component
{

    public $account = 0, $referral_link, $chart_data, $btcChartData, $ethChartData, $usdtChartData, $btc, $eth, $usdt, $btcProfitTotal = 0, $btcCapitalTotal = 0, $ethProfitTotal = 0, $ethCapitalTotal = 0, $usdtProfitTotal = 0, $usdtCapitalTotal = 0;

    public function render()
    {
        $usdtChart = Investment::where([['user_id', '=', Auth()->user()->id], ["token_id", '=', 1]])->orderBy('created_at', 'asc')->pluck("amount", DB::raw("DATE_FORMAT(created_at, '%m/%d') as date"));
        $btcChart = Investment::where([['user_id', '=', Auth()->user()->id], ["token_id", '=', 2]])->orderBy('created_at', 'asc')->pluck("amount", DB::raw("DATE_FORMAT(created_at, '%m/%d') as date"));
        $ethChart = Investment::where([['user_id', '=', Auth()->user()->id], ["token_id", '=', 3]])->orderBy('created_at', 'asc')->pluck("amount", DB::raw("DATE_FORMAT(created_at, '%m/%d') as date"));

        $btcChartData = ["date" => [], "amount" => []];
        $ethChartData = ["date" => [], "amount" => []];
        $usdtChartData = ["date" => [], "amount" => []];

        foreach($btcChart as $date=>$amount) {
            $btcChartData['date'][] = $date;
            $btcChartData['amount'][] = $amount;
        }
        // dd($btcChartData);

        foreach($ethChart as $date=>$amount) {
            $ethChartData['date'][] = $date;
            $ethChartData['amount'][] = $amount;
        }
        // dd($ethChartData);

        foreach($usdtChart as $date=>$amount) {
            $usdtChartData['date'][] = $date;
            $usdtChartData['amount'][] = $amount;
        }

        // dd($usdtChartData);

        $this->btcChartData = $btcChartData;
        $this->ethChartData = $ethChartData;
        $this->usdtChartData = $usdtChartData;
        
        return view('livewire.user.home')->layout('layouts.user.index');
    }

    public function mount()
    {
        $user = Auth()->user();

        $this->referral_link = $user->referrallink();

        if($user->bitcoin_address && $user->ethereum_address && $user->usdt_address) {
            $this->account = 1;
        }
        
        $investments = Investment::where('user_id', '=', Auth()->user()->id)->with('token')->get();
        
        $this->usdt = $investments->where('token_id', '=', 1);
        $this->btc = $investments->where('token_id', '=', 2);
        $this->eth = $investments->where('token_id', '=', 3);

        $this->btcProfitTotal = $this->btc->sum('profit');
        $this->btcCapitalTotal = $this->btc->sum('amount');

        $this->ethProfitTotal = $this->eth->sum('profit');
        $this->ethCapitalTotal = $this->eth->sum('amount');

        $this->usdtProfitTotal = $this->usdt->sum('profit');
        $this->usdtCapitalTotal = $this->usdt->sum('amount');
        
        // dd($this->eth->sum('amount'));

    }
}
