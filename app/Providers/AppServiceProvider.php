<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BaseRepository;
use App\Repositories\DepartemenRepository;
use App\Repositories\KaryawanRepository;
use App\Repositories\PosisiRepository;

use App\Repositories\BaseRepositoryInterface;
use App\Repositories\DepartemenRepositoryInterface;
use App\Repositories\KaryawanRepositoryInterface;
use App\Repositories\PosisiRepositoryInterface;

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
