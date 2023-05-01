<?php

namespace App\Services;

class TodoService extends BaseServiceApi
{
    public function __construct()
    {
        parent::__construct($path = '/todos');
    }
}
