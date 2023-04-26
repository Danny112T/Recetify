<?php

namespace App\GraphQL\Mutations;

use App\Models\Comment;
use App\Models\Recipe;

final class CreateComment
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $recipe = Recipe::findOrFail($args['recipe_id']);
        $comment = new Comment();
        $comment->comentario = $args['comentario'];
        $comment->rating = $args['rating'];
        $recipe->comments()->save($comment);
        return $comment;
    }
}
