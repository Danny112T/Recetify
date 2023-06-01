<?php

namespace App\Services;

use App\Models\Cat_ingredient;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RecipeIngredientService
{

    public static function AddIngredienttoRecipe(String $recipeId, String $ingredientId, Float $quantity, String $unit): Cat_ingredient
    {
        $user = Recipe::find($recipeId);
        $ingredient = Cat_ingredient::find($ingredientId);
        $user->cat_ingredients()->attach($ingredient, ['quantity'=>$quantity, 'unit'=>$unit]); // FIXME: que retorne el ingrediente y el valor pivote
        return $ingredient;
    }

    public static function RemoveIngredienttoRecipe(String $recipeId, String $ingredientId): Cat_ingredient
    {
        $user = Recipe::find($recipeId);
        $ingredient = Cat_ingredient::find($ingredientId);
        $user->cat_ingredients()->detach($ingredient);
        return $ingredient;
    }
}
