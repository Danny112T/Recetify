<?php

namespace App\GraphQL\Mutations;

use App\Models\Recipe;
use App\Models\Step;

final class CreateStep
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $recipe = Recipe::findOrFail($args['recipe_id']);
        $step = new Step();
        $step->description = $args['description'];
        $recipe->steps()->save($step);
    }
}
