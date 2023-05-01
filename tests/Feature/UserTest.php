<?php

use Faker\Factory as Faker;

uses(Tests\TestCase::class);

it('can list users', function () {
    $response = $this->get("$this->path/users");
    $response->assertOk();
});

it('does not create user without fields', function () {
    $response = $this->postJson("$this->path/users", []);
    $response->assertStatus(422);
});

it('can create a user', function () {
    $faker = Faker::create();

    $attributes = [
        'name' => $faker->name,
        'email' => $faker->email,
        'gender' => $faker->randomElement(['female', 'male']),
        'status' => $faker->randomElement(['active', 'inactive']),
    ];

    $response = $this->postJson("{$this->path}/users", $attributes);
    $response->assertOk();
});

it('can show a user', function () {
    $responseUsers = $this->get("$this->path/users");
    $user = $responseUsers->json()[0];
    $userId = $user['id'];

    $response = $this->get("$this->path/users/$userId");
    $response->assertOk();
});

it('can create a new post for a user', function () {
    $responseUsers = $this->get("$this->path/users");
    $user = $responseUsers->json()[0];
    $userId = $user['id'];

    $faker = Faker::create();

    $data = [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];

    $response = $this->postJson("$this->path/users/$userId/posts", $data);

    $response->assertOk();
});

it('can create a new comment for a post', function () {
    $responsePosts = $this->get("$this->path/posts");
    $post = $responsePosts->json()[0];
    $postId = $post['id'];

    $faker = Faker::create();

    $data = [
        'name' => $faker->name,
        'email' => $faker->email,
        'body' => $faker->paragraph,
    ];

    $response = $this->postJson("$this->path/posts/$postId/comments", $data);

    $response->assertOk();
});

it('can create a new comment for the first post', function () {
    $responsePosts = $this->get("$this->path/posts");
    $post = $responsePosts->json()[0];
    $postId = $post['id'];

    $faker = Faker::create();

    $data = [
        'name' => $faker->name,
        'email' => $faker->email,
        'body' => $faker->paragraph,
    ];

    $response = $this->postJson("$this->path/posts/$postId/comments", $data);

    $response->assertOk();
});

it('can delete comment', function () {
    $responseComments = $this->get("$this->path/comments");
    $comment = $responseComments->json()[0];
    $commentId = $comment['id'];

    $response = $this->delete("$this->path/comments/$commentId");

    $response->assertOk();
});
