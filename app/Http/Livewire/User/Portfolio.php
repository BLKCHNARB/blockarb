<?php

namespace App\Http\Livewire\User;

use App\Models\Investment;
use App\Models\Compound;
use App\Models\Order;
use App\Models\Token;
use Livewire\Component;

class Portfolio extends Component
{
    public $investments, $retailPlans, $businessPlans, $enterprisePlans, $investment, $address, $token, $token_id, $amount, $investment_id, $topup, $compound, $topup_info, $compound_info, $confirm, $successful, $maxAmount, $step = 0;

    public function render()
    {
        return view('livewire.user.portfolio')->layout('layouts.user.index');
    }

    public function mount() {
        // $investments = Investment::where("user_id",)
        $user = Auth()->user();
        $this->investments = $user->investments;
        $investments = $user->investments;

        $this->retailPlans = $investments->where('plan_id', '=', 1);
        $this->businessPlans = $investments->where('plan_id', '=', 2);
        $this->enterprisePlans = $investments->where('plan_id', '=', 3);
        // dd($this->retailPlans);

        $this->compound_info = true;
        $this->topup_info = true;
    }

    public function topup($id) {
        $this->reset('amount');

        $investment = $this->investments->where('id',$id)->first();
        $this->investment = $investment;

        $this->token_id = $investment->token->id;
        $this->token = Token::findorFail($this->token_id);
        $this->address = $this->token->address;

        $this->investment_id = $id;
        $this->topup = true;
    }

    public function confirm() {

        Order::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->token->id,
            'plan_id' => 1,
            'amount' => $this->amount,
            'address' => $this->token->address,
            'percentage' => 5,
            'duration' => 1,
            'performance_fee' => 5,
            'status' => 0,
        ]);

        $this->topup = false;
        $this->step++;
    }

    public function rules()
    {
        return [
            'amount' => 'required|gt:0|lt:' . $this->maxAmount
        ];
    }

    public function updatedAmount()
    {
        $this->validate([
            'amount' => 'required|gt:0|lt:' . $this->maxAmount
        ]);

        // If validation passes, clear the error for the 'amount' field
        $this->resetErrorBag('amount');
    }


    public function compound($id) {
        $this->reset('amount');
        
        $this->resetErrorBag('amount');

        $investment = $this->investments->where('id',$id)->first();
        $this->investment = $investment;

        $this->maxAmount = $investment->profit;

        $this->token_id = $investment->token->id;
        $this->token = Token::findorFail($this->token_id);
        $this->address = $this->token->address;

        $this->investment_id = $id;
        $this->compound = true;
    }
    
    public function confirmSnowball() {

        $this->validate();

        $this->compound = false;
        $this->confirm = true;

    }

    public function initializeSnowball() {

        Compound::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->token_id,
            'amount' => $this->amount,
            'status' => 0,
        ]);

        $this->confirm = false;
        $this->successful = true;
    }

    public function process() {

        Order::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->token->id,
            'plan_id' => 1,
            'amount' => $this->amount,
            'address' => $this->token->address,
            'percentage' => 5,
            'duration' => 1,
            'status' => 0,
        ]);

    }
}