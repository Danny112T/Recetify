<?php

namespace App\GraphQL\Mutations;

use App\Services\AllergyService;
use Illuminate\Support\Facades\Auth;

final class AddAllergytoUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $userAuth = Auth::user();
        $ingredient = $args['id'];
        $attach = AllergyService::AddAllergytoUser($userAuth->id, $ingredient);
        return $attach;
    }
}
