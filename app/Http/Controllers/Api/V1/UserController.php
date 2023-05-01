<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserPostFormRequest;
use App\Services\UserService;

class UserController extends BaseControllerApi
{
    public function __construct(UserService $userService)
    {
        parent::__construct($userService);
    }

    protected function formRequest(): UserFormRequest
    {
        return app(UserFormRequest::class);
    }

    public function storePost(UserPostFormRequest $request, int $userId)
    {
        return $this->service->storePost($userId, $request->all());
    }
}
