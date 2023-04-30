<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodLabel extends Model
{
    use HasFactory;

     protected $fillable = [
        'food_id',
        'name',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
