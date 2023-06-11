<?php

namespace App\Observers;

use App\Models\Comment;
use App\Models\Recipe;

class commentObserver
{
    /**
     * Handle the Comment "created" event.
     */
    public function created(Comment $comment): void
    {
        $recipe = $comment->recipe;
        $comments = $recipe->comments;
        $avgRating = $comments->avg('rating');
        $recipe -> rate = $avgRating;
        $recipe -> save();
    }

    /**
     * Handle the Comment "updated" event.
     */
    public function updated(Comment $comment): void
    {
        $this->recalculateAverageRating($comment->recipe);
    }

    /**
     * Handle the Comment "deleted" event.
     */
    public function deleted(Comment $comment): void
    {
        $this->recalculateAverageRating($comment->recipe);
    }

    /**
     * Handle the Comment "restored" event.
     */
    public function restored(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "force deleted" event.
     */
    public function forceDeleted(Comment $comment): void
    {
        //
    }

    /**
     * Function to update average rating of recipe
     */
    private function recalculateAverageRating(Recipe $recipe)
    {
        $comments = $recipe->comments;
        $avgRating = $comments->avg('rating');
        $recipe -> rate = $avgRating;
        $recipe -> save();
    }
}
