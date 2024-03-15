<?php

namespace App\Http\Livewire\User;

use App\Models\Investment;
use App\Models\Token;
use App\Models\Withdrawal as ModelsWithdrawal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Withdrawal extends Component
{

    public $amount, $selectedToken, $selectedPurse, $selectedWallet, $wallet, $maxAmount, $selectedInvestment, $tokens = [], $investments, $successful = false, $fail = false;

    public function updatedSelectedToken()
    {
        if ($this->selectedToken) {
            $this->selectedInvestment = $this->investments->where('token_id', '=', $this->selectedToken)->first();

            $this->selectedPurse = null;
            $this->amount = null;
        }
    }

    public function updatedSelectedPurse() {
        if($this->selectedPurse) {
            if($this->selectedPurse == "profit") {
                $this->maxAmount = $this->selectedInvestment->profit;
            } elseif($this->selectedPurse == "capital") {
                $this->maxAmount = $this->selectedInvestment->amount;
            }

            $this->amount = null;
        }
    }

    public function rules()
    {
        return [
            'amount' => 'required|gt:0|lt:' . $this->maxAmount,
            'selectedToken' => 'required',
            'selectedPurse' => 'required',
            
        ];
    }

    public function withdraw()
    {
        $this->validate();

        // dd($this->selectedInvestment->token_id);

        $this->selectedWallet = $this->selectedInvestment->token_id;

        if ($this->selectedWallet === 1 && !$this->wallet['usdt'] ) {

            $this->fail = true;
            return;

        } elseif ($this->selectedWallet === 2 && !$this->wallet['bitcoin']) {
            
            $this->fail = true;
            return;
            
        } elseif ($this->selectedWallet === 3 && !$this->wallet['ethereum']) {

            $this->fail = true;
            return;
            
        }

        ModelsWithdrawal::create([
            'user_id' => Auth()->user()->id,
            'amount' => $this->amount,
            'token_id' => $this->selectedToken,
            'purse' => $this->selectedPurse,
            'processed' => 0,
        ]);

        $this->successful = true;
    }

    public function close()
    {
        $this->successful = false;
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
      
        $user = Auth()->user();
        $this->wallet['bitcoin'] = $user->bitcoin_address;
        $this->wallet['ethereum'] = $user->ethereum_address;
        $this->wallet['usdt'] = $user->usdt_address;
    }
}
