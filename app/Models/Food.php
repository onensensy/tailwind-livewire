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
    ];

    public function nutritionInformation()
    {
        return $this->hasMany(NutritionInformation::class);
    }
}
