<?php

namespace App\Http\Livewire\User;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Settings extends Component
{
    public $user, $firstName, $email, $lastName, $country, $address, $phone, $wallet, $password;

    public function render()
    {
        return view('livewire.user.settings')->layout('layouts.user.index');
    }

    public function mount() {
        $user = Auth()->user();
        $this->user = $user;
        $this->firstName = $user->first_name;
        $this->lastName = $user->last_name;
        $this->email = $user->email;
        $this->country = $user->country;
        $this->address = $user->address;
        $this->phone = $user->phone;
        $this->wallet['bitcoin'] = $user->bitcoin_address;
        $this->wallet['ethereum'] = $user->ethereum_address;
        $this->wallet['usdt'] = $user->usdt_address;
    }

    public function updateProfile() {
        $this->validate([
            'address' => 'string|required',
            'country' => 'string|required',
            'phone' => 'string|required'
        ]);

        $this->user->address = $this->address;
        $this->user->country = $this->country;
        $this->user->phone = $this->phone;
        $this->user->save();

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success', 'title' => 'Profile Update',  'message' => 'Profile has been updated']
        );
    }

    public function updateWallet() {
        $this->validate([
            'wallet' => 'required|min:1'
        ]);

        if(!$this->wallet['bitcoin'] && !$this->wallet['ethereum'] && !$this->wallet['usdt']) {
            return $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error', 'title' => 'Wallet Update',  'message' => 'Please enter valid addresses']
            );
        }

        $this->user->bitcoin_address = $this->wallet['bitcoin'];
        $this->user->ethereum_address = $this->wallet['ethereum'];
        $this->user->usdt_address = $this->wallet['usdt'];
        $this->user->save();

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success', 'title' => 'Wallet Update',  'message' => 'Wallet has been updated']
        );
    }

    public function updatePassword() {

        $this->validate([
            'password.current' => 'required',
            'password.new' => 'required|min:8|string',
            'password.confirm' => 'required|min:8|string'
        ]);
        if (!(Hash::check($this->password['current'], Auth()->user()->password))) {
            // The passwords matches
            return $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error', 'title' => 'Password Update',  'message' => 'Your current password does not match with the password']
            );
        }

        if(strcmp($this->password['current'], $this->password['new']) == 0){
            // Current password and new password same
            return $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error', 'title' => 'Password Update',  'message' => 'New Password cannot be same as your current password.']
            );
        }

        if(!strcmp($this->password['new'], $this->password['confirm']) == 0){
            // Current password and new password same
            return $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error', 'title' => 'Password Update',  'message' => 'Password confirmation should match the password']
            );
        }

        $this->user->password = bcrypt($this->password['new']);
        $this->user->save();

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success', 'title' => 'Password Update',  'message' => 'Password has been updated']
        );
        $this->reset(['password']);

        event(new PasswordReset($this->user));
    }
}
