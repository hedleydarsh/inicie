<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\CommentService;

class CommentController extends BaseControllerApi
{
    public function __construct(CommentService $commentService)
    {
        parent::__construct($commentService);
    }
}
