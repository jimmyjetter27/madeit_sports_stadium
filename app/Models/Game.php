<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'sport_image', 'amount'];

    public function getAmountAttribute($value)
    {
        return number_format($value, 2);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::create($value)->format('D, jS F Y');
    }
}
