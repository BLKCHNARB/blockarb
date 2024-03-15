<?php

namespace App\Http\Livewire\User;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Component;

class Settings extends Component
{
    public $user, $firstName, $email, $lastName, $country, $address, $phone, $wallet, $password, $updated = false, $updated_message, $fail = false, $failure_message;

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
        $rules = [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'address' => 'string|required',
            'country' => 'string|required',
            'phone' => 'string|required'
        ];
        
        // Check if the email has been updated
        if ($this->email !== $this->user->email) {
            // Add email validation rule
            $rules['email'] = 'required|string|email|max:255|unique:users';
        }
        
        // Validate the request data
        $this->validate($rules);

        $this->user->first_name = $this->firstName;
        $this->user->last_name = $this->lastName;
        $this->user->email = $this->email;
        $this->user->country = $this->country;
        $this->user->address = $this->address;
        $this->user->phone = $this->phone;
        $this->user->save();

        $this->updated = true;
        $this->updated_message = "Profile details updated successfully";

    }

    public function updateWallet() {
        $this->validate([
            'wallet' => 'required|min:1'
        ]);

        if(!$this->wallet['bitcoin'] && !$this->wallet['ethereum'] && !$this->wallet['usdt']) {
            
            $this->fail = true;
            $this->failure_message = "Can not update empty Wallet address";

            $this->wallet['bitcoin'] = $this->user->bitcoin_address;
            $this->wallet['ethereum'] = $this->user->ethereum_address;
            $this->wallet['usdt'] = $this->user->usdt_address;

            return;
        }

        $this->user->bitcoin_address = $this->wallet['bitcoin'];
        $this->user->ethereum_address = $this->wallet['ethereum'];
        $this->user->usdt_address = $this->wallet['usdt'];
        $this->user->save();

        $this->updated = true;
        $this->updated_message = "Your wallet address has been updated successfully";

    }

    public function updatePassword() {

        $this->validate([
            'password.current' => ['required', function ($attribute, $value, $fail) {
                if (!(Hash::check($value, Auth()->user()->password))) {
                    $fail('Incorrect password');
                }
            }],

            'password.new' => ['required', 'min:8', 'string', function ($attribute, $value, $fail) {
                if (strcmp($this->password['current'], $this->password['new']) == 0) {
                    $fail('New Password cannot be same as your current password.');
                }
            }],

            'password.confirm' => ['required', 'min:8', 'string', function ($attribute, $value, $fail) {
                if (!strcmp($this->password['new'], $this->password['confirm']) == 0) {
                    $fail('Password should match New password');
                }
            }]
        ]);

        $this->user->password = bcrypt($this->password['new']);
        $this->user->save();

        $this->updated = true;
        $this->updated_message = "Your password has been updated";

        $this->reset(['password']);

        event(new PasswordReset($this->user));
    }
}
