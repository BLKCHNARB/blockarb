<?php

namespace App\Http\Livewire\User;

use App\Models\Investment;
use App\Models\Token;
use App\Models\Withdrawal as ModelsWithdrawal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Withdrawal extends Component
{

    public $amount, $selectedToken, $selectedPurse, $maxAmount, $selectedInvestment, $tokens = [], $investments;

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success', 'title' => 'Withdrawal',  'message' => 'Withdrawal placed successfully!']
        );
    }

    public function updatedSelectedToken()
    {
        if ($this->selectedToken) {
            $this->selectedInvestment = $this->investments->where('token_id', '=', $this->selectedToken)->first();
        }
    }

    public function updatedSelectedPurse() {
        if($this->selectedPurse) {
            if($this->selectedPurse == "profit") {
                $this->maxAmount = $this->selectedInvestment->profit;
            } elseif($this->selectedPurse == "capital") {
                $this->maxAmount = $this->selectedInvestment->amount;
            }
        }
    }

    public function rules()
    {
        return [
            'amount' => 'required|gt:0|lt:' . $this->maxAmount,
            'selectedToken' => 'required',
            'selectedPurse' => 'required'
        ];
    }

    public function withdraw()
    {
        $this->validate();
        ModelsWithdrawal::create([
            'user_id' => Auth()->user()->id,
            'amount' => $this->amount,
            'token_id' => $this->selectedToken,
            'purse' => $this->selectedPurse,
            'processed' => 0,
        ]);
        $this->alertSuccess();
    }

    public function render()
    {
        return view('livewire.user.withdrawal')->layout('layouts.user.index');
    }

    public function mount()
    {
        $tokens = Token::all();
        $this->tokens = $tokens;
        $this->investments = Investment::where('user_id', '=', Auth()->user()->id)->with('token')->get();
        // dd($this->investments);
        // foreach ($this->investments as $investment) {
        //     dd($investment->token->name);
        // }
    }
}
