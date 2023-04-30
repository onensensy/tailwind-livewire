<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodFoodPart extends Model
{
    use HasFactory;
    protected $table = 'food_food_part';

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function foodPart()
    {
        return $this->belongsTo(FoodPart::class);
    }
}
