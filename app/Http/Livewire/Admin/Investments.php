<?php

namespace App\Http\Livewire\Admin;

use App\Models\Investment;
use Livewire\Component;
use Livewire\WithPagination;

class Investments extends Component
{
    use WithPagination;

    public $deletingmodal = false;

    public function render()
    {
        $investments = Investment::paginate(10);
        return view('livewire.admin.investments', ['investments' => $investments])->layout('layouts.admin.index');
    }

    public function deletemodal($id) {
        $this->deletingmodal = $id;
    }

    public function delete() {
        $investment = Investment::findorFail($this->deletingmodal);
        $investment->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'Investment Deleted Successfully');
        
        // $this->reset(['item']);
    }

}
