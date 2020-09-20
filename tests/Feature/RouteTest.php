<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * 测试路由是否无法找到
     *
     * @return void
     */
    public function testRouteExists()
    {
        $this->assertTrue(!!route('file.upload'));
        $this->assertTrue(!!route('user.info.agent'));
        $this->assertTrue(!!route('conversation.list.agent'));
        $this->assertTrue(!!route('conversation.message.list', 1));
        $this->assertTrue(!!route('conversation.message.send', 1));
        $this->assertTrue(!!route('institution.profile.show', 1));
        $this->assertTrue(!!route('institution.profile.update', 1));
        $this->assertTrue(!!route('login'));
        $this->assertTrue(!!route('verification.verify', 1));
        $this->assertTrue(!!route('oauth.callback', 1));
        $this->assertTrue(!!route('visitor.init'));
    }
}
