<?php

namespace Modules\Comment\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Comment\Models\Comment;
use Modules\Post\Models\Post;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function insertData()
    {
        $comment = Comment::factory()->make()->toArray();

        Comment::create($comment);

        $this->assertDatabaseCount('comments' , 1);
        $this->assertDatabaseHas('comments' , $comment);
    }

    /**
     * @test
     * @return void
     */
    public function CommentRelationWithPost()
    {
        $comment = Comment::factory()
            ->hasCommentable(Post::factory())
            ->create();

        $this->assertTrue(isset($comment->commentable->id));
        $this->assertTrue($comment->commentable instanceof Post);
    }
}
