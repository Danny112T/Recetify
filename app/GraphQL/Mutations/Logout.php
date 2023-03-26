<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;


final class Logout
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user = null;
        $token = null;

        $user = Auth::user();
        $tokenId = $user->currentAccessToken()->plainTextToken;
        $user->tokens()->where('id', $tokenId)->delete();
        return [
            'user' => $user,
            'accessToken' => $tokenId
        ];
    }
}
