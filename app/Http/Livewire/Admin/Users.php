<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Collection;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

//class Users extends Component
class Users extends LivewireDatatable
{
//    public $users;

    public $model = User::class;

   function columns()
   {
       return [
           NumberColumn::name('id')->label('ID')->sortBy('id'),
           Column::name('name')->label('Name'),
           Column::name('email')->label('Email'),
           Column::name('type')->label('Type'),
           DateColumn::name('created_at')->label('Creation Date')
       ];
   }

//    public function render()
//    {
//        $users = User::query()->latest()
////            ->orderByDesc('', '')
//            ->get();
//        $this->users = new Collection($users);
////        dd($this->users);
//        return view('livewire.admin.users');
//    }
}
