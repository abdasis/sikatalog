<?php

namespace App\Providers;

use App\Repositories\KategoriRepository;
use App\Repositories\KategoriRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(KategoriRepositoryInterface::class, KategoriRepository::class);
    }
}
