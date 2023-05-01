<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\PostCommentFormRequest;
use App\Http\Requests\PostFormRequest;
use App\Services\PostService;

class PostController extends BaseControllerApi
{
    public function __construct(PostService $postService)
    {
        parent::__construct($postService);
    }

    protected function formRequest(): PostFormRequest
    {
        return app(PostFormRequest::class);
    }

    public function storeComment(PostCommentFormRequest $request, int $postId)
    {
        return $this->service->storeComment($postId, $request->all());
    }

    public function storeCommentFirstPost(PostCommentFormRequest $request)
    {
        $posts     = (new PostService())->getAll();
        $postJson  = json_decode($posts);
        $postId    = $postJson[0]->id;
        return $this->service->storeComment($postId, $request->all());
    }
}
