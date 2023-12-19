<?php

namespace App\Http\Livewire\Admin;

use App\Models\Plan;
use App\Models\Token;
use Livewire\Component;
use Livewire\WithPagination;

class Create extends Component
{
    use WithPagination;

    public $deletingmodal = false, $creatingmodal = false, $item, $plans, $tokens, $selectedplanid, $selectedcategoryid;

    protected $rules = [
        'item.plan' => 'required|string',
        'item.token' => 'required|string',
        'item.minimum' => 'required|numeric',
        'item.maximum' => 'required|numeric',
        'item.percentage' => 'required|numeric',
        'item.duration' => 'required|string',
    ];

    public function render()
    {
        $tokenPlans = Plan::with('tokens')->paginate(5);
        return view('livewire.admin.create', ['tokenPlans' => $tokenPlans])->layout('layouts.admin.index');
    }

    public function mount()
    {
        $this->plans = Plan::all();
        $this->tokens = Token::all();
    }

    public function deletemodal($plan, $token)
    {
        $this->deletingmodal['plan'] = $plan;
        $this->deletingmodal['token'] = $token;
    }

    public function createmodal()
    {
        $this->reset(['item']);
        $this->creatingmodal = true;
        // dd($this->item);
    }

    public function savePlan()
    {
        $this->validate();
        $plan = Plan::findorFail($this->item['plan']);
        $token = Token::findorFail($this->item['token']);
        $name = $plan->name . " " . $token->name;
        $plan->tokens()->attach($this->item['token'], ['maximum' => $this->item['maximum'], 'minimum' => $this->item['minimum'], 'percentage' => $this->item['percentage'], 'duration' => $this->item['duration']]);
        session()->flash('message', 'Plan Added Successfully');
        $this->creatingmodal = false;
        $this->reset(['item']);
    }

    public function delete()
    {
        if ($this->deletingmodal['plan']) {
            $plan = Plan::findorFail($this->deletingmodal['plan']);
            $plan->tokens()->detach($this->deletingmodal['token']);
            session()->flash('message', 'Plan Deleted Successfully');
            $this->deletingmodal = false;
            $this->reset(['item']);
        }
    }
}
