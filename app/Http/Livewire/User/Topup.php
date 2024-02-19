<?php

namespace App\Http\Livewire\User;

use App\Models\Investment;
use App\Models\Order;
use App\Models\Token;
use Livewire\Component;

class Topup extends Component
{

    public $investments, $investment, $address, $token, $token_id, $amount, $investment_id, $topup, $min, $confirm;

    public function render()
    {
        return view('livewire.user.topup')->layout('layouts.user.index');
    }

    public function rules() {
        return [
            'amount' => 'required|gte:'.$this->min
        ];
    }

    public function mount() {
        // $investments = Investment::where("user_id",)
        $user = Auth()->user();
        $this->investments = $user->investments;
    }

    public function topup($id) {
        $this->reset('amount');

        $investment = $this->investments->where('id',$id)->first();
        $this->investment = $investment;

        $this->token_id = $investment->token->id;
        $this->token = Token::findorFail($this->token_id);
        $this->address = $this->token->address;
        if($this->token_id === 1) {
            $this->min = 500;
        } else if($this->token_id === 2) {
            $this->min = 0.01;
        } else if($this->token_id === 3) {
            $this->min = 0.1;
        }

        $this->investment_id = $id;
        $this->topup = true;
    }

    public function confirm() {
        $this->validate();

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

        $this->topup = false;
        $this->confirm = true;
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
