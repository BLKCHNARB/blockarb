<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStep extends Component
{
    use WithFileUploads;

    public $user, $front, $back, $step = 0, $firstName, $lastName, $phone, $dob, $gender, $nationality, $residence, $address, $document = null, $issuedBy, $documentNumber;

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
    }

    public function save(){
        $front_name = $this->front->store('fronts', 'public');
        $this->user->document_front = $front_name;

        $back_name = $this->back->store('backs', 'public');
        $this->user->document_back = $back_name;
        $this->user->save();

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success', 'title' => 'KYC',  'message' => 'KYC Complete']
        );
    }

    // protected $rules = [
    //     'firstName' => 'required',
    //     'lastName' => 'required',
    //     'phone' => 'required',
    //     'gender' => 'required',
    //     'nationality' => 'required',
    //     'residence' => 'required',
    //     'address' => 'required',
    // ];

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
            $this->user->phone = $this->phone;
            $this->user->dob = $this->dob;
            $this->user->gender = $this->gender;
            $this->user->country = $this->nationality;
            $this->user->residence = $this->residence;
            $this->user->address = $this->address;
            $this->user->save();
        } else if($this->step === 2) {
            $this->validate([
                'document' => 'required',
                'issuedBy' => 'required',
                'documentNumber' => 'required',
            ]);
        } else if($this->step === 3) {
            $valid = $this->validate([
                'front' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
                'back' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            ]);
        } else if($this->step === 4) {
            $this->save();
            $this->reset(['document', 'documentNumber', 'issuedBy', 'front', 'back']);
            return $this->step = 1;
        }
        $this->step++;
    }

    public function previous()
    {
        if ($this->step === 0) {
            return;
        }
        $this->step--;
    }
}
