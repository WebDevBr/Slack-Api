<?php

namespace WebDevBr\Slack;

use GuzzleHttp\Client;

class Slack
{
    private static $userToken;

    public static function setTokenAndUser(Array $data)
    {
        if (empty($data['token']) or empty($data['user'])) {
            throw new \Exception("Please, informe a token and user");
        }

        self::$userToken = $data;
    }

    public static function __callStatic($method, $attr)
    {
        $method = 'WebDevBr\Slack\Methods\\'.ucfirst($method);
        $data = call_user_func_array([new $method, 'get'], $attr);

        //$data['data'] = array_merge();

        $client = new Client();
        return $client->request($data['method'], $data['url'], [
            'query'=>self::$userToken,
            'form_params'=>$data['data'],
        ]);
    }
}
