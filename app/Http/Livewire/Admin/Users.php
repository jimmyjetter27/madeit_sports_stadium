<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Http\Livewire;

class Users extends Component
//class Users extends Livewire\LivewireDatatable
{
    public $users;

    public function render()
    {
        $users = User::query()->latest()
//            ->orderByDesc('', '')
            ->get();
        $this->users = new Collection($users);
//        dd($this->users);
        return view('livewire.admin.users');
    }
}
