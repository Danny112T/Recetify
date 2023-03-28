<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat_ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_path',
        'calories',
        'fat',
        'carbs',
        'proteins',
    ];
}
