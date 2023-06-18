<?php

namespace App\GraphQL\Mutations;

use App\Models\Comment;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

final class CreateComment
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $user = Auth::user();
        $recipe = Recipe::findOrFail($args['recipe']['connect']);
        $comment = new Comment();
        $comment->comentario = $args['comentario'];
        $comment->rating = $args['rating'];
        $comment->user()->associate($user);
        //$comment->user_id = $user->id;
        $recipe->comments()->save($comment);
        return $comment;
    }
}
