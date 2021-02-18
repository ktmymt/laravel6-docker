<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Todo\TodoRepositoryInterface::class,
            // \App\Repositories\Todo\TodoEQRepository::class,
            \App\Repositories\Todo\TodoQBRepository::class
        );
    }

    public function boot()
    {
    }
}
