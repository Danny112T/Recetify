<?php

namespace App\GraphQL\Mutations;

use App\Models\Recipe;
use App\Models\User;

final class CreateRecipe
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user = User::findOrFail($args['user_id']);
        $recipe = new Recipe();
        $recipe->title = $args['title'];
        $recipe->description = $args['description'];
        $recipe->origen_food = $args['origen_food'];
        $recipe->time_food = $args['time_food'];
        $recipe->diet = $args['diet'];
        $recipe->prep_time = $args['prep_time'];
        $recipe->calories = $args['calories'];
        $recipe->fat = $args['fat'];
        $recipe->carbs = $args['carbs'];
        $recipe->proteins = $args['proteins'];
        $recipe->porcion = $args['porcion'];
        $recipe->rate = 5.0;
        $user->recipes()->save($recipe);
        return $recipe;
    }
}
