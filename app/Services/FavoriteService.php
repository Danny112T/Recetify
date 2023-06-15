<?php

namespace App\Services;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class FavoriteService
{

    public static function AddRecipeToFavorites(String $userId, String $recipeId): Recipe
    {
        $user = User::find($userId);
        $Recipe = Recipe::find($recipeId);
        $user->favoriteRecipes()->attach($Recipe->id);
        return $Recipe;
    }

    public static function RemoveRecipeToFavorites(String $userId, String $recipeId): Recipe
    {
        $user = User::find($userId);
        $Recipe = Recipe::find($recipeId);
        $user->favoriteRecipes()->detach($Recipe->id);
        return $Recipe;
    }
}
