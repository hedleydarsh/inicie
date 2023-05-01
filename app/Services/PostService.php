<?php

namespace App\Services;

class PostService extends BaseServiceApi
{
    public function __construct()
    {
        parent::__construct($path = '/posts');
    }

    public function storeComment($id, $data)
    {
        $url = $this->uri . '/' . $id . '/comments';
        return $this->http->post($url, $data)->getBody()->getContents();
    }
}
