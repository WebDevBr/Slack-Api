<?php

include 'vendor/autoload.php';

use WebDevBr\Slack\Slack;

$token_and_user = [
	'token'=>'you-slack-token',
	'user'=>'yout-user-id',
];

$data = [
	'email'=>'falecom@erikfigueiredo.com.br',
];

Slack::setTokenAndUser($token_and_user);
$api_return = Slack::userAdmin('invite', $data, 'POST');

echo $api_return->getBody();
echo PHP_EOL;
