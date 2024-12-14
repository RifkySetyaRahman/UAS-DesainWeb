<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{
    BaseRepositoryInterface,
    DepartemenRepositoryInterface,
    KaryawanRepositoryInterface,
    PosisiRepositoryInterface,
    BaseRepository,
    DepartemenRepository,
    KaryawanRepository,
    PosisiRepository
};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(DepartemenRepositoryInterface::class, DepartemenRepository::class);
        $this->app->bind(KaryawanRepositoryInterface::class, KaryawanRepository::class);
        $this->app->bind(PosisiRepositoryInterface::class, PosisiRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
