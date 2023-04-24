<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $filleable = ['comentario','rating','recipe_id'];

    public function recipe(): BelongsTo {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id');
    }
}
