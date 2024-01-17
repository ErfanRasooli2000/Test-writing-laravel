<?php

namespace Modules\Tag\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TagServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(TagRepositoryPatternServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

        Route::prefix("api/tag")
            ->group(__DIR__ . "/../routes/api.php");
    }
}
