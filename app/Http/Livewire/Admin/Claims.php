<?php

namespace App\Http\Livewire\Admin;

use App\Models\Claim;
use Livewire\Component;

class Claims extends Component
{
    public $deletingmodal = false, $processingmodal = false;

    public function render()
    {
        $claims = Claim::where("processed", 0)->paginate(10);

        return view('livewire.admin.claims',  ['claims' => $claims])->layout('layouts.admin.index');
    }

    public function deletemodal($id) {
        $this->deletingmodal = $id;
    }

    public function delete() {
        $claim = Claim::findorFail($this->deletingmodal);
        $claim->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'claim Deleted Successfully');
        
        // $this->reset(['item']);
    }

    public function processmodal($id) {
        $this->processingmodal = $id;
    }

    public function process() {
        $claim = Claim::findorFail($this->processingmodal);
        // $user = $claim->user;

        $claim->processed = 1;
        $claim->save();

        $claim->reward->delete();

        $this->processingmodal = false;
        session()->flash('success', 'Claim Processed');
        
        // $this->reset(['item']);
    }
}
