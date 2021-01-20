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
            \Domain\Usecase\Bulletin\GetLoginUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\GetLoginInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\GetPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\GetPostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\ConfirmPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\ConfirmPostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\GetAllPostsUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\GetAllPostsInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\CreatePostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\CreatePostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\EditPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\EditPostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\UpdatePostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\UpdatePostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\UpdateConfirmPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\UpdateConfirmPostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\CreateUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\CreateUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\GetUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\GetUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\ConfirmUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\ConfirmUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\GetAllUsersUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\GetAllUsersInteractor::class,
        );

        //bind repositories
        $this->app->bind(
            \Domain\Repository\Bulletin\LoginRepository::class,
            \App\RepositoryImpl\LoginRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\Post\PostRepository::class,
            \App\RepositoryImpl\Post\PostRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\Post\ConfirmPostRepository::class,
            \App\RepositoryImpl\Post\ConfirmPostRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\Post\AllPostsRepository::class,
            \App\RepositoryImpl\Post\AllPostsRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\Post\CreatePostRepository::class,
            \App\RepositoryImpl\Post\CreatePostRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\Post\EditPostRepository::class,
            \App\RepositoryImpl\Post\EditPostRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\Post\UpdatePostRepository::class,
            \App\RepositoryImpl\Post\UpdatePostRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\Post\UpdateConfirmPostRepository::class,
            \App\RepositoryImpl\Post\UpdateConfirmPostRepositoryImpl::class,
        );

      

        $this->app->bind(
            \Domain\Repository\Bulletin\User\CreateUserRepository::class,
            \App\RepositoryImpl\User\CreateUserRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\User\UserRepository::class,
            \App\RepositoryImpl\User\UserRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\User\ConfirmUserRepository::class,
            \App\RepositoryImpl\User\ConfirmUserRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\User\AllUsersRepository::class,
            \App\RepositoryImpl\User\AllUsersRepositoryImpl::class,
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
