<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStep extends Component
{
    use WithFileUploads;

    public $user, $front, $back, $step = 0, $firstName, $lastName, $phone, $dob, $gender, $nationality, $residence, $address, $document = null, $issuedBy, $documentNumber, $basic, $identity;

    public function render()
    {
        return view('livewire.multi-step');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->firstName = $this->user->first_name;
        $this->lastName = $this->user->last_name;
        $this->dob = $this->user->dob;
        $this->gender = $this->user->gender;
        $this->nationality = $this->user->country;
        $this->phone = $this->user->phone;
        $this->residence = $this->user->residence;
        $this->address = $this->user->address;

        if (empty($this->firstName) || empty($this->lastName) || empty($this->dob) || empty($this->gender) || empty($this->nationality) || empty($this->phone) || empty($this->residence) || empty($this->address)) {
            $this->basic = false;
        } else {
            $this->basic = true;
        }

        if (empty($this->user->document_front)) {
            $this->identity = false;
        } else {
            $this->identity = false;
        }

    }

    public function save() {
        $front_name = $this->front->store('fronts', 'public');
        $this->user->document_front = $front_name;
        
        if ($this->document === 'national' || $this->document === 'driver') {
            $back_name = $this->back->store('backs', 'public');
            $this->user->document_back = $back_name;
        }
        
        $this->user->save();
    }

    public function next()
    {
        if ($this->step === 1) {
            $this->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'phone' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'nationality' => 'required',
                'residence' => 'required',
                'address' => 'required',
            ]);
            // update
            $this->user->first_name = $this->firstName;
            $this->user->last_name = $this->lastName;
            $this->user->phone = $this->phone;
            $this->user->dob = $this->dob;
            $this->user->gender = $this->gender;
            $this->user->country = $this->nationality;
            $this->user->residence = $this->residence;
            $this->user->address = $this->address;
            $this->user->save();

            $this->basic = true;

        } else if ($this->step === 2) {

            // @dd($this->document);

            $this->validate([
                'document' => 'required',
                'issuedBy' => 'required',
                // 'documentNumber' => 'required|string',
            ]);

            $this->validateOnly('documentNumber', [
                'documentNumber' => ['required', 'string', function ($attribute, $value, $fail) {
                
                    $docNumRegex = '/^.{6,15}$/';
        
                    if (!preg_match($docNumRegex, $value)) {
                        $fail('Invalid document number');
                    }
                }],
            ]);

        } else if ($this->step === 3) {
            $rules = [
                'front' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            ];
            
            if ($this->document === 'national' || $this->document === 'driver') {
                $rules['back'] = 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048';
            }
            
            $valid = $this->validate($rules);
        } else if ($this->step === 4) {
            $this->save();
            $this->reset(['document', 'documentNumber', 'issuedBy', 'front', 'back']);
            
            $this->identity = true;
            
            return $this->step = 0;
            
        }

        if ($this->step === 0 && $this->basic == true) {
            $this->step = 2;
        } else {
            $this->step++;
        }
    }

    public function clear()
    {
        $this->reset(['documentNumber', 'issuedBy']);
    }

    public function previous()
    {
        if ($this->step === 0) {
            return;
        }
        $this->step--;
    }
}
