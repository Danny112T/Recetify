<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $filleable = ['comentario','rating','recipe_id', 'user_id',];

    public function recipe(): BelongsTo {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id');
    }

    public function user(): BelongsTo {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
