<?php

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Post\Models\Post;
use Tests\TestCase;

class HomeControlerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        Post::factory()->count(29)->create();

        $response = $this->get(route("home"));

        $response->assertViewIs("welcome");
        $response->assertViewHas('posts' , Post::query()->latest()->paginate(10));
        $response->assertStatus(200);
    }
}
