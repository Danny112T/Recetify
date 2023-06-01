<?php

namespace App\GraphQL\Mutations;

use App\Services\AllergyService;
use Illuminate\Support\Facades\Auth;

final class RemoveAllergytoUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $userAuth = Auth::user();
        $ingredient = $args['id'];
        $attach = AllergyService::RemoveAllergytoUser($userAuth->id, $ingredient);
        return $attach;
    }
}
