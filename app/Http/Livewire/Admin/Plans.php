<?php

namespace App\Http\Livewire\Admin;

use App\Models\Plan;
use Livewire\Component;
use Livewire\WithPagination;

class Plans extends Component
{
    use WithPagination;

    public $deletingmodal = false, $editingmodal = false, $name, $creatingmodal = false, $cname;

    public function render()
    {
        $plans = Plan::paginate(10);
        return view('livewire.admin.plans', ['plans' => $plans])->layout('layouts.admin.index');
    }

    protected $rules = [
        'cname' => 'required|string',
    ];

    public function deletemodal($id)
    {
        $this->deletingmodal = $id;
    }

    public function delete()
    {
        $plan = Plan::findorFail($this->deletingmodal);
        $plan->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'Plan Deleted Successfully');

        // $this->reset(['item']);
    }

    public function editmodal($id)
    {
        $plan = Plan::findorFail($id);

        $this->name = $plan->name;
        $this->editingmodal = $id;
    }

    public function edit()
    {
        $plan = Plan::findorFail($this->editingmodal);

        $plan->name = $this->name;
        // $plan->address = $this->address;

        $plan->save();

        $this->editingmodal = false;
        session()->flash('success', 'Plan Edited');

        $this->reset(['name']);
        
    }

    public function createmodal()
    {
        $this->reset(['cname']);
        $this->creatingmodal = true;
    }

    public function create()
    {
        $this->validate();

        Plan::create([
            'name' => $this->cname
        ]);

        $this->creatingmodal = false;
        session()->flash('success', 'Plan Created');

        $this->reset(['cname']);
    }
}