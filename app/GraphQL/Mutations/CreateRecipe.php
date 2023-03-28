<?php

namespace App\GraphQL\Mutations;

use App\Models\Recipe;

final class CreateRecipe
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $file = $args['image_pf_path'];
        $file->storePublicly('public/uploads');
        $recipe = new Recipe();
        $recipe->title = $args['title'];
        $recipe->description = $args['description'];
        $recipe->image_pf_path = $file;
        $recipe->origen_food = $args['origen_food'];
        $recipe->time_food = $args['time_food'];
        $recipe->diet = $args['diet'];
        $recipe->prep_time = $args['prep_time'];
        $recipe->calories = $args['calories'];
        $recipe->fat = $args['fat'];
        $recipe->carbs = $args['carbs'];
        $recipe->proteins = $args['proteins'];

        $recipe->save();
    }
}
