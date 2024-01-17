<?php

namespace Modules\User\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Comment\Models\Comment;
use Modules\Post\Models\Post;
use Modules\User\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * @return void
     */
    public function insertData()
    {
        $user = User::factory()->unverified()->make()->toArray();

        User::create($user);

        $this->assertDatabaseCount("users" , 1);
        $this->assertDatabaseHas("users" , $user);
    }

    /**
     * @test
     * @return void
     */
    public function userRelationWithPost()
    {
        $count = round(1,11);

        $user = User::factory()
            ->hasPosts($count)
            ->create();

        $this->assertTrue(isset($user->posts->first()->id));
        $this->assertTrue($user->posts->first() instanceof Post);
    }

    /**
     * @test
     * @return void
     */
    public function userRelationWithComment()
    {
        $count = round(1,11);

        $user = User::factory()
            ->hasComments($count)
            ->create();

        $this->assertDatabaseCount("comments",$count);
        $this->assertTrue($user->comments->first() instanceof Comment);
    }
}
