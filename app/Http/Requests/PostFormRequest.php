<?php

namespace App\Http\Requests;

class PostFormRequest extends BaseRequest
{
    protected function baseRules(): array
    {
        return [
            'title' => ['required', 'string'],
            'body'  => ['required', 'string'],
        ];
    }
}
