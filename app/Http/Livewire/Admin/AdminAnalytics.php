<?php

namespace App\Http\Livewire\Admin;

use App\Models\Game;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class AdminAnalytics extends Component
{
    public $total_user_count;
    public $new_user_count;
    public $games_count;
    public $revenue;
    public function render()
    {
        $this->total_user_count = User::query()->get()->count();
        $this->new_user_count = User::query()->where('created_at', '=', Carbon::today())->get()->count();
        $this->games_count = Game::query()->get()->count();
        $this->revenue = Payment::query()->where('status', 'success')->get()->sum('amount');
        return view('livewire.admin.admin-analytics');
    }
}
