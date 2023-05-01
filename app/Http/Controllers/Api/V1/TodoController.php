<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\TodoService;

class TodoController extends BaseControllerApi
{
    public function __construct(TodoService $todoService)
    {
        parent::__construct($todoService);
    }
}
