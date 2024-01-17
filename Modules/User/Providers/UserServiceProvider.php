<?php

namespace Modules\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(UserRepositoryPatternServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

        Route::prefix("api/user")
            ->group(__DIR__ . "./../routes/api.php");
    }
}
