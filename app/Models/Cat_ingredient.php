<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Cat_ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'calories',
        'fat',
        'carbs',
        'proteins',
    ];

    public function image(): MorphOne {
        return $this->morphOne('App\Models\Images','imageable');
    }
}
