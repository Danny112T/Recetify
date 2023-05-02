<?php

namespace App\GraphQL\Mutations;

use App\Models\Step;
use Illuminate\Support\Facades\Storage;

final class UploadImageStep
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $file = $args['image'];
        $url = $file->storePublicly('public/uploads/Steps');
        $step = Step::findOrFail($args['id']);
        $image = $step->image;
        if($image == null) {
            $step->image()->create(['url'=>$url]);
        } else {
            Storage::delete($image->url);
            $image->url = null;
            $step->image()->update(['url'=>$url]);
        }
        return $step;
    }
}
