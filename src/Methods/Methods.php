<?php

namespace WebDevBr\Slack\Methods;

abstract class Methods
{
    protected $url = 'https://slack.com/api/';

    abstract protected function setData(Array $data);
    abstract protected function mountRequest($method, $request = 'GET');

    public function get($apiMethod, Array $data, $httpMethod = 'get')
    {
        $this->setData($data);
        return $this->mountRequest($apiMethod, strtoupper($httpMethod));
    }
}
