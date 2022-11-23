<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class NewUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $user_type;
    public function save()
    {
        return 'me';
        dd('working');
        dd([
            $this->name,
            $this->email,
            $this->password,
            $this->confirm_password,
            $this->user_type,
        ]);
    }
    public function render()
    {
        return view('livewire.admin.new-user');
    }
}
