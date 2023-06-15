<?php

namespace App\GraphQL\Queries;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

final class Favorites
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args): LengthAwarePaginator
    {
        $userAuth = Auth::user();
        $user = User::find($userAuth->id);
        $favs = $user->favoriteRecipes()->get();
        return new LengthAwarePaginator(
            $favs,
            $favs->count(),
            10,
            1
        );
    }
}
