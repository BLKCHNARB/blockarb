<?php

namespace App\Http\Livewire\User;

use App\Models\Otc as ModelsOtc;
use Livewire\Component;
use App\Models\Token;
use App\Models\Order;
use App\Models\PlanToken;

class Otc extends Component
{

    public $selectedToken, $tokens, $amount, $min, $max, $plan, $successful;

    public function mount() {
        $tokens = Token::all();
        $this->tokens = $tokens;
    }

    public function render()
    {
        return view('livewire.user.otc')->layout('layouts.user.index');
    }

    public function updatedSelectedToken() {

        $token = Token::findorFail($this->selectedToken);
       
        $address = $token->address;

        $plan = PlanToken::where(['token_id'=> $this->selectedToken, 'plan_id'=> 3])->first();

        $this->plan = $plan;

        $this->min = $plan->minimum;
        $this->max = $plan->maximum;
        $percentage = $plan->percentage;
        $duration = $plan->duration;
        $performance_fee = $plan->performance_fee;

        
        $this->amount = null;
        
    }

    protected $rules = [
        'selectedToken' => 'required',   
    ];

    public function purchase() {
    
        $this->validate();

        $this->validateOnly('amount', [
            'amount' => 'required|lte:'.$this->max.'|gte:'.$this->min
        ]);

        $token = Token::findorFail($this->selectedToken);
       
        $address = $token->address;

        $plan = PlanToken::where(['token_id'=> $this->selectedToken, 'plan_id'=> 3])->first();

        Order::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->selectedToken,
            'plan_id' => $plan->plan_id,
            'amount' => $this->amount,
            'address' =>  $address,
            'percentage' => $plan->percentage,
            'duration' => $plan->duration,
            'performance_fee' => $plan->performance_fee,
            'status' => 0,
        ]);

        ModelsOtc::create([
            'token' => $token->name,
            'wallet' =>  $address,
            'amount' => $this->amount,
        ]);

        $this->successful = true;
    }
}
