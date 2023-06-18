<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class CommentPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //return Auth::user()->id == $user->id;
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Comment $comment): bool
    {
        //
        $userAuth = Auth::user();
        return $userAuth->id == $comment->user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user,Comment $comment): bool
    {
        //
        $userAuth = Auth::user();
        if ($user->id == $comment->recipe->user_id){
            return true;
        } else if ($userAuth->id == $comment->user->id){
            return true;
        } else {
            return false;
        }
    }
}
