<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once 'src/services/DisplayPostsService.php';
require_once 'src/entities/PostEntity.php';

class DisplayPostsServiceTest extends TestCase
{
    public function test_DisplayPostsService_correctDisplay()
    {
        $postEntity = new PostEntity(0,'test title oop to poop','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the test is longer', username: 'username', date_time: '2025-12-12');
        $input = [$postEntity];
        $actual = DisplayPostsService::allPosts($input);

        $this->assertStringContainsString('test title oop to poop', $actual);
        $this->assertStringContainsString('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', $actual);
        $this->assertStringContainsString('username', $actual);
        $this->assertStringContainsString('2025/12/12', $actual);

    }
}