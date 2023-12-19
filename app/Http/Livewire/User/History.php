<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class History extends Component
{

    public $deposits, $withdrawals, $compounds, $transfers, $topups;

    public function render()
    {
        return view('livewire.user.history')->layout('layouts.user.index');
    }

    public function mount() {
        $this->deposits = Auth()->user()->deposits;
        $this->withdrawals = Auth()->user()->withdrawals;
        $this->compounds = Auth()->user()->compounds;
        $this->transfers = Auth()->user()->transfers;
        $this->topups = Auth()->user()->topups;
    }
}
