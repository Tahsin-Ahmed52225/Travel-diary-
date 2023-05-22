<?php

namespace App\Providers;

use App\Interfaces\LoginRepositoryInterface;
use App\Interfaces\RegisterRepositoryInterface;
use App\Repositories\LoginRepository;
use App\Repositories\RegisterRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RegisterRepositoryInterface::class, RegisterRepository::class);
        $this->app->bind(LoginRepositoryInterface::class, LoginRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
