<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreferredMeal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'food_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function meals()
    {
        return $this->belongsTo(Food::class);
    }
}
