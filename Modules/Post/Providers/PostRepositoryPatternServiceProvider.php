<?php

namespace Modules\Post\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Post\Database\Repositories\Contracts\PostRepositoryInterface;
use Modules\Post\Database\Repositories\Repos\PostRepository;

class PostRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class , PostRepository::class);
    }
}
