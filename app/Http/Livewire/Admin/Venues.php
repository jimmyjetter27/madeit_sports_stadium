<?php

namespace App\Http\Livewire\Admin;

use App\Models\Venue;
use Illuminate\Support\Collection;
use Livewire\Component;

class Venues extends Component
{
    public $venues;
    public function render()
    {
        $venues = Venue::query()->latest()->get();
        $this->venues = new Collection($venues);
        return view('livewire.admin.venues');
    }
}
