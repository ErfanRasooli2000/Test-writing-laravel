<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\User\Database\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\Database\Repositories\Repos\UserRepository;

class UserRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class , UserRepository::class);
    }
}
