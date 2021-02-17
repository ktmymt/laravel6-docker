<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Todo\TodoRepositoryInterface::class,
            \App\Repositories\Todo\TodoRepository::class
        );
    }

    public function boot()
    {
    }
}
