<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionInformation extends Model
{
    use HasFactory;

    protected $table = 'nutrition_information';

    protected $fillable = [
        'food_id',
        'serving_size',
        'calories',
        'protein',
        'fat',
        'carbohydrates',
        'fibre',
    ];


    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
