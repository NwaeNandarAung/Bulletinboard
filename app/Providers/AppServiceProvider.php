<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //bind usecases
        $this->app->bind(
            \Domain\Usecase\Bulletin\GetPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\GetPostInteractor::class,
        );

        //bind repositories
        $this->app->bind(
            \Domain\Repository\Bulletin\PostRepository::class,
            \App\RepositoryImpl\PostRepositoryImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
