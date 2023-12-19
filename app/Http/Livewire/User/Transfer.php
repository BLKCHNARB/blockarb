<?php

namespace App\Http\Livewire\User;

use App\Models\Compound;
use App\Models\Investment;
use App\Models\Order;
use App\Models\PlanToken;
use App\Models\Token;
use App\Models\Transfer as ModelsTransfer;
use App\Models\User;
use Livewire\Component;

class Transfer extends Component
{

    public $tokens, $investments, $amount, $selectedToken, $selectedInvestment, $maxAmount, $email, $selectedTransferToken, $selectedTransferAmount, $maxTransferAmount;

    public function mount()
    {
        $this->investments = Investment::where('user_id', '=', Auth()->user()->id)->with('token')->get();
    }

    public function render()
    {
        return view('livewire.user.transfer')->layout('layouts.user.index');
    }

    public function updatedSelectedToken()
    {
        if ($this->selectedToken) {
            $this->selectedInvestment = $this->investments->where('token_id', '=', $this->selectedToken)->first();
            $this->maxAmount = $this->selectedInvestment->profit;
        }
    }

    public function rules()
    {
        return [
            'amount' => 'required|gt:0|lt:' . $this->maxAmount,
            'selectedToken' => 'required',
        ];
    }

    public function alertSuccess($type, $title, $message)
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => $type, 'title' => $title,  'message' => $message]
        );
    }

    public function compound()
    {
        $this->validate();

        Compound::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->selectedToken,
            'amount' => $this->amount,
            'status' => 0,
        ]);

        $this->alertSuccess('success', 'Compound Investment', 'You transaction is being processed');
    }

    public function updatedSelectedTransferToken()
    {
        if ($this->selectedTransferToken) {
            $this->selectedInvestment = $this->investments->where('token_id', '=', $this->selectedTransferToken)->first();
            $this->maxTransferAmount = $this->selectedInvestment->profit;
        }
    }

    public function validateToken()
    {
        $this->validateOnly('selectedTransferToken', [
            'selectedTransferToken' => 'required'
        ]);
    }

    public function validateAmount()
    {
        $this->validateOnly('selectedTransferAmount', [
            'selectedTransferAmount' => 'required|gt:0|lt:' . $this->maxTransferAmount,
        ]);
    }

    public function validateEmail()
    {
        if ($this->email === Auth()->user()->email) {
            return $this->alertSuccess('error', 'Funds Transfer', 'cannot transfer funds to self');
        }

        $this->validateOnly('email', [
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users']
        ]);
    }

    public function validateTransfer()
    {
        $this->validateToken();
        $this->validateAmount();
        $this->validateEmail();
    }

    public function transfer()
    {
        $this->validateTransfer();

        $receiver = User::where('email', '=', $this->email)->first();
        $receiver_investment = $receiver->investments->where('token_id', $this->selectedTransferToken)->first();
        $plan = PlanToken::where('token_id', $this->selectedTransferToken)->where('minimum', '<=', $this->selectedTransferAmount)->where('maximum', '>=', $this->selectedTransferAmount)->first();
        // dd($plan);
        if ($receiver_investment) {
            $receiver_investment->amount += $this->selectedTransferAmount;
            $receiver_investment->save();
        } else {

            $order = Order::create([
                'user_id' => $receiver->id,
                'token_id' => $this->selectedTransferToken,
                'plan_id' => $plan->plan_id,
                'amount' => $this->selectedTransferAmount,
                'percentage' => $plan->percentage,
                'address' => Token::findorFail($this->selectedTransferToken)->address,
                'duration' => $plan->duration,
                'status' => 0,
            ]);

            updateOrder($order->id);
        }
        $sender_investment = Auth()->user()->investments->where('token_id', $this->selectedTransferToken)->first();
        $sender_investment->profit -= $this->selectedTransferAmount;
        $sender_investment->save();
        
        ModelsTransfer::create([
            'user_id' => Auth()->user()->id,
            'token_id' => $this->selectedTransferToken,
            'amount' => $this->selectedTransferAmount,
            'receiver' => $receiver->id
        ]);
        $this->alertSuccess('success', 'Funds Transfer', 'Funds transferred successfully');
    }
}