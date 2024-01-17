<?php

namespace Modules\Post\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(PostRepositoryPatternServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

        Route::prefix("api/post/")
            ->group(__DIR__ . "./../routes/api.php");

    }
}
