<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_pf_path',
        'origen_food',
        'time_food',
        'diet',
        'prep_time',
        'calories',
        'fat',
        'carbs',
        'proteins',
        'rate',
    ];
}
