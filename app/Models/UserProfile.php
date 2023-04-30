<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'height',
        'weight',
        'dob',
        'gender',
        'activity_level',
        'bmr',
        'bmi',
        'goal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
