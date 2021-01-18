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

        $this->app->bind(
            \Domain\Usecase\Bulletin\GetLoginUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\GetLoginInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\GetAllPostsUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\GetAllPostsInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\CreatePostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\CreatePostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\ConfirmPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\ConfirmPostInteractor::class,
        );

        //bind repositories
        $this->app->bind(
            \Domain\Repository\Bulletin\PostRepository::class,
            \App\RepositoryImpl\PostRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\LoginRepository::class,
            \App\RepositoryImpl\LoginRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\AllPostsRepository::class,
            \App\RepositoryImpl\AllPostsRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\CreatePostRepository::class,
            \App\RepositoryImpl\CreatePostRepositoryImpl::class,
        );
        $this->app->bind(
            \Domain\Repository\Bulletin\ConfirmPostRepository::class,
            \App\RepositoryImpl\ConfirmPostRepositoryImpl::class,
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
