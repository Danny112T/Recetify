<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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

    public function user(): BelongsTo {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
