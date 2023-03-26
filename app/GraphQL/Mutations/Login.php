<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use GraphQL\Error\Error;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

final class Login
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user = null;
        $token = null;

        $user = User::where('email', $args['email'])->first();

        if ($user == null || ! Hash::check($args['password'], $user->password)) {
            throw new Error('Invalid Credentials');
        }

        $token = $user->createToken(Str::uuid());
        return [
            'user' => $user,
            'accessToken' => $token->plainTextToken
        ];
    }
}
