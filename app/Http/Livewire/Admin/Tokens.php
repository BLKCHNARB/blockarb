<?php

namespace App\Http\Livewire\Admin;

use App\Models\Token;
use Livewire\Component;
use Livewire\WithPagination;

class Tokens extends Component
{
    use WithPagination;

    public $deletingmodal = false, $editingmodal = false, $name, $address, $creatingmodal = false, $cname, $caddress;

    public function render()
    {
        $tokens = Token::paginate(10);
        return view('livewire.admin.tokens', ['tokens' => $tokens])->layout('layouts.admin.index');
    }

    protected $rules = [
        'cname' => 'required|string',
        'caddress' => 'required|string',
    ];

    public function deletemodal($id)
    {
        $this->deletingmodal = $id;
    }

    public function delete()
    {
        $withdrawal = Token::findorFail($this->deletingmodal);
        $withdrawal->delete();
        $this->deletingmodal = false;
        session()->flash('success', 'Token Deleted Successfully');

        // $this->reset(['item']);
    }

    public function editmodal($id)
    {
        $token = Token::findorFail($id);

        $this->name = $token->name;
        $this->address = $token->address;

        $this->editingmodal = $id;
    }

    public function edit()
    {
        $token = Token::findorFail($this->editingmodal);

        $token->name = $this->name;
        $token->address = $this->address;

        $token->save();

        $this->editingmodal = false;
        session()->flash('success', 'Token Edited');

        $this->reset(['name', 'address']);
        
    }

    public function createmodal()
    {
        $this->reset(['cname', 'caddress']);
        $this->creatingmodal = true;
    }

    public function create()
    {
        $this->validate();

        Token::create([
            'name' => $this->cname,
            'address' => $this->caddress
        ]);

        $this->creatingmodal = false;
        session()->flash('success', 'Token Created');

        $this->reset(['cname', 'caddress']);
    }
}
