<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        'name',
        'api_name',
        'image',
        'description',

    ];

    public function foodCategory()
    {
        return $this->belongsToMany(FoodCategory::class);
    }

    public function foodParts()
    {
        return $this->belongsToMany(FoodPart::class);
    }

    public function nutritionInformation()
    {
        return $this->hasMany(NutritionInformation::class);
    }
}
