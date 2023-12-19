<?php

namespace App\Http\Livewire\User;

use App\Models\Otc as ModelsOtc;
use Livewire\Component;

class Otc extends Component
{

    public $token, $amount, $wallet;

    public function render()
    {
        return view('livewire.user.otc')->layout('layouts.user.index');
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success', 'title' => 'OTC',  'message' => 'Order Placed. We will contact you shortly via email']
        );
    }

    protected $rules = [
        'token' => 'required',
        'amount' => 'required',
        'wallet' => 'required'
    ];

    public function purchase() {
        $this->validate();
        ModelsOtc::create([
            'token' => $this->token,
            'wallet' => $this->wallet,
            'amount' => $this->amount
        ]);
        $this->alertSuccess();
    }
}
