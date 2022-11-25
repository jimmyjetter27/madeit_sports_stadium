<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Venue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'location', 'description', 'game_id'
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::create($value)->format('D, jS F Y');
    }
}
