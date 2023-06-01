<?php

namespace App\GraphQL\Mutations;

use App\Models\Recipe;
use App\Services\RecipeIngredientService;

final class AddIngredienttoRecipe
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $recipe = Recipe::find($args['id_recipe']);
        $ingredient = $args['id_ingredient'];
        $quantity = $args['quantity'];
        $unit = $args['unit'];
        $attach = RecipeIngredientService::AddIngredienttoRecipe($recipe->id, $ingredient, $quantity, $unit);
        return $attach;
        }
}
