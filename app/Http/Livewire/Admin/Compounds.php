<?php

namespace App\Http\Livewire\Admin;

use App\Models\Compound;
use App\Models\Investment;
use App\Models\Plan;
use App\Models\PlanToken;
use Livewire\Component;
use Livewire\WithPagination;

class Compounds extends Component
{
    use WithPagination;

    public $deletingmodal = false, $processingmodal = false, $investments;

    public function render()
    {
        $order = Compound::where("status", 0)->paginate(6);

        return view('livewire.admin.compounds', ['orders' => $order])->layout('layouts.admin.index');
    }

    public function deletemodal($id)
    {
        $this->deletingmodal = $id;
    }

    public function delete()
    {
        $order = Compound::findorFail($this->deletingmodal);
        $order->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'Order Deleted Successfully');
    }

    public function processmodal($id)
    {
        $this->processingmodal = $id;
    }

    public function process()
    {
        $compoundOrder = Compound::findorFail($this->processingmodal);
        $this->investments = Investment::where('user_id', '=', $compoundOrder->user->id)->with('token')->get();

        $selectedInvestment = $this->investments->where('token_id', '=', $compoundOrder->token->id)->first();

        $planToken = PlanToken::where(['token_id' => $selectedInvestment->token_id, 'plan_id' => $selectedInvestment->plan_id])->first();
        // dd($planToken->maximum);

        $validRow = $planToken::where([['minimum', '<=', $selectedInvestment->amount], ['maximum', '>=', $selectedInvestment->amount]])->first();
        $percentage = $validRow->percentage;
        $planId = $validRow->plan_id;
        
        $compoundOrder->status = 1;
        $compoundOrder->save();

        $selectedInvestment->amount += $compoundOrder->amount;
        $selectedInvestment->profit -= $compoundOrder->amount;
        $selectedInvestment->percentage = $percentage;
        $selectedInvestment->plan_id = $planId;
        $selectedInvestment->save();

        $this->processingmodal = false;
        session()->flash('success', 'Order Processed');
    }
}
