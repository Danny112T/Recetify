<?php

namespace App\Policies;

use App\Models\Recipe;
use App\Models\Step;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class StepPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
        //return $user->id == $injected['recipe']['connect'];
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Step $Step): bool
    {
        //
        return $user->id == $Step->recipe->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Step $Step): bool
    {
        //
        return $user->id == $Step->recipe->user_id;
    }
}
