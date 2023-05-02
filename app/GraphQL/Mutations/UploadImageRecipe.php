<?php

namespace App\GraphQL\Mutations;

use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;

final class UploadImageRecipe
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $file = $args['image'];
        $url = $file->storePublicly('public/uploads/Recipes');
        $recipe = Recipe::findOrFail($args['id']);
        $image = $recipe->image;
        if($image == null) {
            $recipe->image()->create(['url'=>$url]);
        } else {
            Storage::delete($image->url);
            $image->url = null;
            $recipe->image()->update(['url'=>$url]);
        }
        return $recipe;
    }
}
