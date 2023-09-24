<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public $user , $users, $name;
    // protected $listeners = ['say-goodbye' => 'sayGoodbye'];
    public $count = 0;

    public function increment()
    {
        // dd($this->name);
        $this->dispatch('say-goodbye', ['message' => 'Hello from Livewire!' . $this->user. ' name is' . $this->name]);
    }

    public function mount()
    {
        $this->users =  User::get();
        $this->dispatch('say-goodbye', ['message' => 'Hello from Livewire!']);
    }

    public function updatedUser($value)
    {
        $this->user = $value;
        // $this->dispatch('say-goodbye', ['message' => 'Hello from Livewire!' . $value. ' name is' . $this->name]);
    }


    public function render(){
        return view('livewire.user-component',['users' => $this->users]);
    }
}
