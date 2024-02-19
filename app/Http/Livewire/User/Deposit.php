<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Plan;
use App\Models\PlanToken;
use App\Models\Token;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Deposit extends Component
{

    public $step = 0, $selectedToken, $selectedPlan, $plans = [], $min, $max, $percentage, $performance_fee, $duration, $token_id, $tokens = [], $amount, $address, $service, $confirm = false;

    public function mount() {
        $tokens = Token::all();
        $this->tokens = $tokens;
    }

    public function updatedSelectedToken() {
        $token = Token::findorFail($this->selectedToken);
        $this->plans = $token->plans;
        // foreach ($token->plans as $plan) {
        //     dd($plan);
        // }

        // Reset the selectedPlan property
        $this->selectedPlan = null;
    }

    public function updatedSelectedPlan() {
        // $plan = Plan::findorFail($this->selectedPlan);
        // $token = Token::findorFail($this->selectedToken);
        $plan = PlanToken::where(['token_id'=> $this->selectedToken, 'plan_id'=> $this->selectedPlan])->first();
        // foreach ($plan as $plan) {
        //     dd($plan->minimum);
        // }
      
        $this->min = $plan->minimum;
        $this->max = $plan->maximum;
        $this->percentage = $plan->percentage;
        $this->duration = $plan->duration;
        $this->performance_fee = $plan->performance_fee;

        $token = Token::findorFail($this->selectedToken);
        $this->plans = $token->plans;
    }

    protected $listeners = ['updatedAmount'];

    public function updatedAmount($value) {
            // Do something with the updated amount value
    }

    public function updated($propertyName){
        if ($propertyName === 'amount') {
            $this->updatedAmount($this->amount);

            $token = Token::findorFail($this->selectedToken);
            $this->plans = $token->plans;
        }
    }

    protected $rules = [
        'token' => 'required',
        'amount' => 'required',
        'plan' => 'required'
    ];

    public function validateToken() {
        $this->validateOnly('selectedToken', [
            'selectedToken' => 'required',
        ]);
    }

    public function validatePlan() {
        $token = Token::findorFail($this->selectedToken);
        $this->plans = $token->plans;

        $this->validateOnly('selectedPlan', [
            'selectedPlan' => 'required',
        ]);
    }

    public function validateAmount() {
        $token = Token::findorFail($this->selectedToken);
        $this->plans = $token->plans;

        $this->validateOnly('amount', [
            // 'amount' => 'required|max:10|min:3'
            'amount' => 'required|lte:'.$this->max.'|gte:'.$this->min
        ]);
    }

    public function validateOne() {
       
        $this->validateToken();
        $this->validatePlan();
        $this->validateAmount();
    }

    public function createOrder() {
        $token = Token::findorFail($this->selectedToken);
        // include(app_path() . '/Utils/constants.php');
        // include(app_path() . '/Utils/cryptoapi.php');
        $this->address = $token->address;
        // if($token->id == 1) {
        //     $this->address = generateAddress();
        // }else {
        //     $this->address = $token->address;
        // }
        Order::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->selectedToken,
            'plan_id' => $this->selectedPlan,
            'amount' => $this->amount,
            'address' => $this->address,
            'percentage' => $this->percentage,
            'duration' => $this->duration,
            'status' => 0,
        ]);
    }

    // public function validateTwo() {
    //     Validator::make(
    //         ['token' => 'required'],
    //         ['amount' => 'required']
    //     )->validate();
    // }

    // public function validateThree() {
    //     Validator::make(
    //         ['token' => 'required'],
    //         ['amount' => 'required']
    //     )->validate();
    // }

    function next() {
        
        $this->createOrder();
        // $this->step === 0 ? $this->validateOne() : ($this->step === 1 ? $this->validateTwo() : ($this->step === 2 ? $this->validateThree() : ''));
        $this->step++;

        $this->confirm = false;
    }

    function updateMin($token) {
        if($token == "usdt") {
            $this->min = "1000 USDT";
        } else if($token == "btc") {
            $this->min = "1 BTC";
        } else if($token == "btc") {
            $this->min = "1 ETH";
        }
    }

    public function confirm()
    {
        $token = Token::findorFail($this->selectedToken);
        $this->plans = $token->plans;

        $this->validateOne();

        $this->confirm = true;
    }

    public function cancel()
    {
        $token = Token::findorFail($this->selectedToken);
        $this->plans = $token->plans;

        $this->confirm = false;
    }

    public function render()
    {
        return view('livewire.user.deposit')->layout('layouts.user.index');
    }
}