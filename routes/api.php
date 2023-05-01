<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('/v1')->group(function () {
    Route::apiResource('users', \App\Http\Controllers\Api\V1\UserController::class);
    Route::apiResource('posts', \App\Http\Controllers\Api\V1\PostController::class);
    Route::apiResource('comments', \App\Http\Controllers\Api\V1\CommentController::class);
    Route::apiResource('todos', \App\Http\Controllers\Api\V1\TodoController::class);

    Route::post(
        'users/{user}/posts',
        [\App\Http\Controllers\Api\V1\UserController::class, 'storePost']
    )->name('users.posts.store');

    Route::post('posts/{post}/comments', [\App\Http\Controllers\Api\V1\PostController::class, 'storeComment'])
        ->name('posts.comments.store');

    Route::post('comment-first-post', [\App\Http\Controllers\Api\V1\PostController::class, 'storeCommentFirstPost'])
        ->name('posts.comments.store-first-post');
});
