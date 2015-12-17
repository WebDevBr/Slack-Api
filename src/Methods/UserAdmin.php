<?php

namespace WebDevBr\Slack\Methods;

class UserAdmin extends Methods
{
    protected function setData(Array $data)
    {
        if (empty($data['email'])) {
            throw new \Exception("Email to invite is required");
        }
        $this->data = $data;
    }

    protected function mountRequest($method, $request = 'GET')
    {
        $data = [
            'url' => $this->url.'users.admin.'.$method,
            'method' => $request,
            'data' => $this->data
        ];

        return $data;
    }
}
