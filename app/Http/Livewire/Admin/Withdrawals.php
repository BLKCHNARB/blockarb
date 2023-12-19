<?php

namespace App\Http\Livewire\Admin;

use App\Event\NewWithdrawal;
use App\Models\Withdrawal;
use Livewire\Component;
use Livewire\WithPagination;

class Withdrawals extends Component
{
    use WithPagination;

    public $deletingmodal = false, $processingmodal = false;

    public function render()
    {
        $withdrawals = Withdrawal::where("processed", 0)->paginate(10);

        return view('livewire.admin.withdrawals', ['withdrawals' => $withdrawals])->layout('layouts.admin.index');
    }

    public function deletemodal($id) {
        $this->deletingmodal = $id;
    }

    public function delete() {
        $withdrawal = Withdrawal::findorFail($this->deletingmodal);
        $withdrawal->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'Withdrawal Deleted Successfully');
        
        // $this->reset(['item']);
    }

    public function processmodal($id) {
        $this->processingmodal = $id;
    }

    public function process() {
        $withdrawal = Withdrawal::findorFail($this->processingmodal);
        $user = $withdrawal->user;
        
        $investment = $user->investments->where("token_id", $withdrawal->token_id)->first();
        if($withdrawal->purse === "profit"){
            if($investment->profit > $withdrawal->amount) {
                $investment->profit-=$withdrawal->amount;
                $investment->save();
            }
        } else if($withdrawal->purse === "capital") {
            if($investment->amount > $withdrawal->amount) {
                $investment->amount-=$withdrawal->amount;
                $investment->save();
            }
        }
        
        $withdrawal->processed = 1;
        $withdrawal->save();

        event(new NewWithdrawal($withdrawal));

        $this->processingmodal = false;
        session()->flash('success', 'Withdrawal Processed');
        
        // $this->reset(['item']);
    }
}
