<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Snowball extends Component
{
    public function render()
    {
        return view('livewire.user.snowball')->layout('layouts.user.index');
    }
}
