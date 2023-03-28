<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

final class CreateUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user = new User();
        $user->name = $args['name'];
        $user->lastname = $args['lastname'];
        $user->email = $args['email'];
        $user->password = Hash::make($args['password']);
        $user->birthday= $args['birthday'];
        $user->save();

        return $user;
    }
}
