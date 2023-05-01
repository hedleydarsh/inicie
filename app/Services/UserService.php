<?php

namespace App\Services;

class UserService extends BaseServiceApi
{
    public function __construct()
    {
        parent::__construct($path = '/users');
    }

    public function storePost($id, $data)
    {
        $url = $this->uri . '/' . $id . '/posts';
        return $this->http->post($url, $data)->getBody()->getContents();
    }
}
