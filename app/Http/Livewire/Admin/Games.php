<?php

namespace App\Http\Livewire\Admin;

use App\Models\Game;
use Illuminate\Support\Collection;
use Livewire\Component;

class Games extends Component
{
    public $games;
    public function render()
    {
        $games = Game::query()->latest()
            ->get();
        $this->games = new Collection($games);
        return view('livewire.admin.games');
    }
}
