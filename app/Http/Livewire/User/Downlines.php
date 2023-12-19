<?php

namespace App\Http\Livewire\User;

use App\Models\Claim;
use App\Models\Investment;
use App\Models\Order;
use App\Models\Reward;
use App\Models\Token;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Downlines extends Component
{
    public $referral_link, $referral_id,$referrals;

    public function render()
    {
        return view('livewire.user.downlines')->layout('layouts.user.index');

    }

    public function mount() {
        
        $user = Auth::user();
        $this->referral_link = $user->referrallink();
        
        $this->referral_id = $user->referral_id;
        
        $this->referrals = $user->referrals;

    }

    public function reinvest($id) {

        $reward = Reward::findorFail($id);
        $token_id = $reward->token_id;
        $user = Auth::user();
        $investment = $user->investments->where("token_id", $token_id)->first();
        if($investment) {
            
            Order::create([
                'user_id' => Auth()->user()->id,
                'token_id' => $token_id,
                'plan_id' => 1,
                'amount' => $reward->amount,
                'address' => Token::findorFail($token_id)->address,
                'percentage' => 5,
                'duration' => 1,
                'status' => 0,
            ]);

            $reward->delete();

            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success', 'title' => 'Claims',  'message' => 'Your token reinvestment is being processed']
            );

        } else {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error', 'title' => 'Claims',  'message' => 'You don\'t have an active investment in this token. Please claim your token']
            );
        }

    }

    public function claim($id) {

        $reward = Reward::findOrFail($id);

        if(Claim::where("reward_id", $id)->exists()) {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error', 'title' => 'Claims',  'message' => 'Your withdrawal is being processed']
            );
        } else {

            Claim::create([
                "user_id" => Auth()->user()->id,
                "reward_id" => $id,
                "token_id" => $reward->token_id,
                "amount" => $reward->amount,
                "processed" => 0,
            ]);

            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success', 'title' => 'Claims',  'message' => 'Your withdrawal is being processed']
            );

        }

    }
}