<?php

namespace App\GraphQL\Mutations;

use App\Services\FavoriteService;
use Illuminate\Support\Facades\Auth;

final class AddRecipeToFavorites
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $userAuth = Auth::user();
        $recipeId = $args['id'];
        $attach = FavoriteService::AddRecipeToFavorites($userAuth->id, $recipeId);
        return $attach;
    }
}
