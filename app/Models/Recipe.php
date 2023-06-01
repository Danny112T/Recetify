<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'origen_food',
        'time_food',
        'diet',
        'prep_time',
        'calories',
        'fat',
        'carbs',
        'proteins',
        'rate',
        'porcion',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function steps(): HasMany {
        return $this->hasMany('App\Models\Step');
    }

    public function comments(): HasMany {
        return $this->hasMany('App\Models\Comment');
    }

    public function image(): MorphOne {
        return $this->morphOne('App\Models\Images','imageable');
    }

    public function cat_ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Cat_ingredient::class)->withPivot(['quantity','unit']);
    }
}
