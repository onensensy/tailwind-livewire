<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionInformations extends Model
{

    use HasFactory;

    protected $table = 'nutrition_informations';

    protected $fillable = [
        'food_id',
        'calories',
        'protein',
        'fat',
        'carbohydrates',
        'fibre'
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
