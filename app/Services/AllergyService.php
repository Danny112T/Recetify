<?php

namespace App\Services;

use App\Models\Cat_ingredient;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AllergyService
{

    public static function AddAllergytoUser(String $userId, String $ingredientId): Cat_ingredient
    {
        $user = User::find($userId);
        $allergy = Cat_ingredient::find($ingredientId);
        $user->cat_ingredientes()->attach($allergy);
        return $allergy;
    }

    public static function RemoveAllergytoUser(String $userId, String $ingredientId): Cat_ingredient
    {
        $user = User::find($userId);
        $allergy = Cat_ingredient::find($ingredientId);
        $user->cat_ingredientes()->detach($allergy);
        return $allergy;
    }
}
