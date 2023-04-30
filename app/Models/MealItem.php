<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;
use App\Models\Food;
use App\Models\FoodPart;


class MealItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'meal_id',
        'food_id',
        'food_part',
    ];

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    // public function foodPart()
    // {
    //     return $this->belongsTo(FoodPart::class);
    // }
}
