<?php

namespace Modules\Post\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Comment\Models\Comment;
use Modules\Post\Models\Post;
use Modules\User\Models\User;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     * @return void
     */
    public function insertData()
    {
        $post = Post::factory()->make()->toArray();

        Post::create($post);

        $this->assertDatabaseCount('posts',1);

        $this->assertDatabaseHas('posts',$post);
    }

    /**
     * @test
     * @return void
     */
    public function PostRelationWithComment()
    {
        $count = round(1,10);

        $post = Post::factory()
            ->hasComments($count)
            ->create();

        $this->assertCount($count , $post->comments);
        $this->assertTrue($post->comments->first() instanceof Comment);
    }

    /**
     * @test
     * @return void
     */
    public function PostRelationWithUser()
    {
         $post = Post::factory()
             ->for(User::factory(),"creator")
             ->create();

         $this->assertTrue(isset($post->creator->id));
         $this->assertTrue($post->creator instanceof User);
    }
}
