<?php

namespace App\Http\Livewire\User;

use App\Models\Investment;
use App\Models\Order;
use App\Models\PlanToken;
use App\Models\Token;
use App\Models\Transfer as ModelsTransfer;
use App\Models\User;
use Livewire\Component;

class Transfer extends Component
{

    public $tokens, $investments, $receiver, $selectedPurse, $selectedInvestment, $email, $selectedTransferToken, $selectedTransferAmount, $maxTransferAmount, $fail = false, $failure_message, $successful, $confirm;

    public function mount()
    {
        $this->investments = Investment::where('user_id', '=', Auth()->user()->id)->with('token')->get();
    }

    public function render()
    {
        return view('livewire.user.transfer')->layout('layouts.user.index');
    }

    public function updatedSelectedTransferToken()
    {
        if ($this->selectedTransferToken) {
            $this->selectedInvestment = $this->investments->where('token_id', '=', $this->selectedTransferToken)->first();

            $this->selectedPurse = null;
            $this->selectedTransferAmount = null;
            
        }
       
    }

    public function updatedSelectedPurse() {
        if($this->selectedPurse) {
            if($this->selectedPurse == "profit") {
                $this->maxTransferAmount = $this->selectedInvestment->profit;
            } elseif($this->selectedPurse == "capital") {
                $this->maxTransferAmount = $this->selectedInvestment->amount;
            }

            $this->selectedTransferAmount = null;
        }
    }

    public function rules()
    {
        return [
            'selectedTransferAmount' => 'required|gt:0|lt:' . $this->maxTransferAmount,
            'selectedTransferToken' => 'required',
            'selectedPurse' => 'required',
            
        ];
    }

    public function validateEmail()
    {

        $this->validateOnly('email', [
            'email' => ['required', 'string', 'email', 'max:255', function ($attribute, $value) {
                if ($value === Auth()->user()->email) {
                    // $this->fail = true;
                    $this->failure_message = "You can not transfer to self. You can only transfer to family and friends.";
                }
                elseif (!User::where('email', $value)->exists()) {
                   
                    // $this->fail = true;
                    $this->failure_message = "User not found, transfers can only be made to Blockarb user's account";
                }
             }]
        ]);
    }

    public function validateTransfer()
    {
        $this->validate();
        $this->validateEmail();
    }

    public function confirmTransfer() {
        $this->validateTransfer();

        if ($this->failure_message) {
            
            $this->fail = true; 
            return; 
        }

        $receiver = User::where('email', '=', $this->email)->first();
        $this->receiver = $receiver;

        $this->confirm = true;
    }

    public function transfer()
    {

        $this->confirm = false;

        $receiver = User::where('email', '=', $this->email)->first();
        $this->receiver = $receiver;
        $receiver_investment = $receiver->investments->where('token_id', $this->selectedTransferToken)->first();
        
        if ($receiver_investment) {
            $receiver_investment->amount += $this->selectedTransferAmount;
            $receiver_investment->save();
        } else {

            $order = Order::create([
                'user_id' => $receiver->id,
                'token_id' => $this->selectedTransferToken,
                'plan_id' => $this->selectedInvestment->plan_id,
                'amount' => $this->selectedTransferAmount,
                'percentage' => $this->selectedInvestment->percentage,
                'address' => Token::findorFail($this->selectedTransferToken)->address,
                'duration' => $this->selectedInvestment->duration,
                'performance_fee' => $this->selectedInvestment->performance_fee,
                'status' => 0,
            ]);

            updateOrder($order->id);
        }

        $sender_investment = Auth()->user()->investments->where('token_id', $this->selectedTransferToken)->first();
        // dd($sender_investment);
        if ($this->selectedPurse === 'capital') {
            $sender_investment->amount -= $this->selectedTransferAmount;
        } elseif ($this->selectedPurse === 'profit') {
            $sender_investment->profit -= $this->selectedTransferAmount;
        }
        $sender_investment->save();
        
        ModelsTransfer::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->selectedTransferToken,
            'amount' => $this->selectedTransferAmount,
            'purse' => $this->selectedPurse,
            'receiver' => $receiver->email
        ]);

        $this->successful = true;
    }
}