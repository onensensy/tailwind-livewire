<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'meal_plan_id',
        'meal_category_id',
        'name',
        'total_calories'
    ];

    public function mealPlan()
    {
        return $this->belongsTo(MealPlan::class);
    }

    public function mealItems()
    {
        return $this->hasMany(MealItem::class);
    }

    public function preferredMeals()
    {
        return $this->hasMany(UserPreferredMeal::class);
    }
}
