<?php

namespace App\Http\Livewire\User;

use App\Models\Investment;
use Livewire\Component;

class Funds extends Component
{

    public $account, $btcProfitTotal, $btcCapitalTotal, $ethProfitTotal, $ethCapitalTotal, $usdtProfitTotal, $usdtCapitalTotal;

    public function render()
    {
        return view('livewire.user.funds')->layout('layouts.user.index');
    }

    public function mount() {

        $investments = Investment::where('user_id', '=', Auth()->user()->id)->with('token')->get();
        
        $usdt = $investments->where('token_id', '=', 1);
        $btc = $investments->where('token_id', '=', 2);
        $eth = $investments->where('token_id', '=', 3);

        $this->btcProfitTotal = $btc->sum('profit');
        $this->btcCapitalTotal = $btc->sum('amount');

        $this->ethProfitTotal = $eth->sum('profit');
        $this->ethCapitalTotal = $eth->sum('amount');

        $this->usdtProfitTotal = $usdt->sum('profit');
        $this->usdtCapitalTotal = $usdt->sum('amount');

        $user = Auth()->user();

        if($user->bitcoin_address && $user->ethereum_address && $user->usdt_address) {
            $this->account = 1;
        }
    }
}
