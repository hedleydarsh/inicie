<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

abstract class BaseServiceApi
{
    protected PendingRequest $http;
    protected string $token;
    protected string $baseUrl;
    protected string $uri;

    public function __construct(string $path)
    {
        $this->token = (string) env('API_TOKEN');
        $this->baseUrl = (string) env('API_BASE_URL');
        $this->uri = $this->baseUrl . $path;

        $this->http = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->baseUrl($this->baseUrl);
    }

    public function getAll()
    {
        return $this->http->get($this->uri)->getBody()->getContents();
    }

    public function getById(int $id)
    {
        return $this->http->get($this->uri . '/' . $id)->getBody()->getContents();
    }

    public function create(array $params)
    {
        return $this->http->post($this->uri, $params)->getBody()->getContents();
    }

    public function delete(int $id)
    {
        return $this->http->delete($this->uri . '/' . $id)->getBody()->getContents();
    }
}
