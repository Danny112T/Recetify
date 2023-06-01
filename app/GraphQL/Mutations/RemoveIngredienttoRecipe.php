<?php

namespace App\GraphQL\Mutations;

use App\Models\Recipe;
use App\Services\RecipeIngredientService;


final class RemoveIngredienttoRecipe
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $recipe = Recipe::find($args['id_recipe']);
        $ingredient = $args['id_ingredient'];
        $attach = RecipeIngredientService::RemoveIngredienttoRecipe($recipe->id, $ingredient);
        return $attach;
    }
}
