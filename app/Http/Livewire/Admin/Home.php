<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public $deletingmodal = false, $viewingmodal = false;

    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.home', ['users' => $users])->layout('layouts.admin.index');
    }

    public function deletemodal($id) {
        $this->deletingmodal = $id;
    }

    public function delete() {
        $user = User::findorFail($this->deletingmodal);
        if($user->id == Auth()->user()->id){
            dd('hey');
            return session()->flash('success', 'Cannot delete logged in user');
        }
        $user->roles()->detach();
        $user->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'user Deleted Successfully');
        
        // $this->reset(['item']);
    }

    // public function
}
