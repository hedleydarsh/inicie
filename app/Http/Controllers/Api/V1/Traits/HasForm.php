<?php

namespace App\Http\Controllers\Api\V1\Traits;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

trait HasForm
{
    /**
     * Returns the request that should be used to validate.
     */
    protected function formRequest(): FormRequest
    {
        return request();
    }

    /**
     * Attributes to fill on model.
     */
    public function formParams(): array
    {
        return $this->formRequest()->safe()->toArray();
    }
}
