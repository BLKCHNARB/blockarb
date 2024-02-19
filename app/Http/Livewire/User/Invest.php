<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Token;

class Invest extends Component
{
    public $account = 0, $usdts, $btcs, $eths, $confirm = false;

    public function render()
    {
        return view('livewire.user.invest')->layout('layouts.user.index');
    }

    public function mount() {
        $user = Auth()->user();

        $this->referral_link = $user->referrallink();

        if($user->bitcoin_address && $user->ethereum_address && $user->usdt_address) {
            $this->account = 1;
        }
        
        $this->usdts = Token::find(1);
        // $this->usdts = $tokens->plans;
        // dd($this->usdts);
        
        $this->btcs = Token::find(2);
        // $this->btcs = $tokens->plans;
        
        $this->eths = Token::find(3);
        // $this->eths = $tokens->plans;
    }

    public function confirm()
    {
        $this->confirm = true;
    }

    public function cancel()
    {
        $this->confirm = false;
    }
}
