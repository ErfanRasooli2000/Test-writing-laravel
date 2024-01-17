<?php

namespace Modules\Tag\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Tag\Database\Repositories\Contracts\TagRepositoryInterface;
use Modules\Tag\Database\Repositories\Repos\TagRepository;

class TagRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(TagRepositoryInterface::class , TagRepository::class);
    }
}
