<?php

namespace App\Providers;

use App\Repositories\FinanceRepository;
use App\Repositories\FinanceRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\usersRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FinanceRepositoryInterface::class,FinanceRepository::class);
        $this->app->bind(UserRepositoryInterface::class,usersRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
