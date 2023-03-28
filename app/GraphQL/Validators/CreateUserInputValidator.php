<?php

namespace App\GraphQL\Validators;

use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

final class CreateUserInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            "name" => ['string', 'max:50'],
            "lastname" => ['string', 'max:50'],
            "email" => [Rule::unique('users','email')],
            "password" => ['string', 'regex:^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?_])(?!\s)[a-zA-Z\d#$@!%&*?_]{6,}$^'],
            "birthday" => [
                'required',
                'date',
                'before_or_equal:'. Carbon::now()
            ],
        ];
    }
}
