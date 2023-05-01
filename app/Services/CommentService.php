<?php

namespace App\Services;

class CommentService extends BaseServiceApi
{
    public function __construct()
    {
        parent::__construct($path = '/comments');
    }
}
