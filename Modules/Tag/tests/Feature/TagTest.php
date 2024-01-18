<?php

namespace Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Post\Models\Post;
use Modules\Tag\Models\Tag;
use Tests\TestCase;

class TagTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * @return void
     */
    public function insertData()
    {
        $tag = Tag::factory()->make()->toArray();

        Tag::create($tag);

        $this->assertDatabaseCount("tags" , 1);
        $this->assertDatabaseHas("tags" , $tag);
    }

    /**
     * @test
     * @return void
     */
    public function TagRelationWithPost()
    {
        $count = round(1,11);

        $tag = Tag::factory()
            ->hasPosts($count)
            ->create();

        $this->assertTrue(isset($tag->posts->first()->id));
        $this->assertTrue($tag->posts->first() instanceof Post);
    }
}
