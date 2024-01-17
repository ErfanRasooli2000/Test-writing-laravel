<?php

namespace Modules\Comment\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(CommentRepositoryPatternServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

        Route::prefix("api/comment")
            ->group(__DIR__ . "./../routes/api.php");
    }
}
