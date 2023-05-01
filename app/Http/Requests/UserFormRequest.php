<?php

namespace App\Http\Requests;

class UserFormRequest extends BaseRequest
{
    protected function baseRules(): array
    {
        return [
            'name'   => ['required', 'string'],
            'email'  => ['required', 'email'],
            'gender' => ['required', 'string'],
            'status' => ['required', 'string'],
        ];
    }
}
