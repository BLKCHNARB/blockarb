<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Pending extends Component
{
    use WithPagination;

    public $deletingmodal = false, $processingmodal = false;

    public function render()
    {
        $order = Order::where("status", 0)->paginate(6);

        return view('livewire.admin.pending', ['orders' => $order])->layout('layouts.admin.index');
    }

    public function deletemodal($id) {
        $this->deletingmodal = $id;
    }

    public function delete() {
        $order = Order::findorFail($this->deletingmodal);
        $order->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'Order Deleted Successfully');        
    }

    public function processmodal($id) {
        $this->processingmodal = $id;
    }

    public function process() {
        $order = Order::findorFail($this->processingmodal);

        updateOrder($order->id);

        $this->processingmodal = false;
        session()->flash('success', 'Order Processed');
    }
}
