<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class Users extends Component
{
    public $users;
    public function render()
    {
        $users = User::query()->latest()->get();
//        dd($users);
        $this->users = new Collection($users);
//        dd($this->users);
        return view('livewire.admin.users');
    }
}
