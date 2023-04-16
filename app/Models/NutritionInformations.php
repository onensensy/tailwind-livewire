<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionInformation extends Model
{

    use HasFactory;

    protected $table = 'nutrition_informations';

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
