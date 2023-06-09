<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Step extends Model
{
    use HasFactory;

    protected $fillable = ['description','recipe_id',];

    public function recipe(): BelongsTo {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id');
    }

    public function image(): MorphOne {
        return $this->morphOne('App\Models\Images','imageable');
    }
}
