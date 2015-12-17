<?php

namespace WebDevBr\Slack\Methods;

class UserAdminTest extends \PHPUnit_Framework_TestCase
{
    public function testDataToInviteUser()
    {
        $data = [
            'email'=>'falecom@erikfigueiredo.com.br'
        ];

        $actual = (new UserAdmin)->get('invite', $data, 'post');
        $expected = [
            'url' => 'https://slack.com/api/users.admin.invite',
            'method' => 'POST',
            'data' => [
                'email'=>'falecom@erikfigueiredo.com.br'
            ]
        ];

        $this->assertEquals($expected, $actual);

    }
}
