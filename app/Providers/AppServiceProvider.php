<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //Post
        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\ConfirmPostScreenUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\ConfirmPostScreenInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\ConfirmPostActionUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\ConfirmPostActionInteractor::class,
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
            \Domain\Usecase\Bulletin\Post\SearchPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\SearchPostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\DeletePostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\DeletePostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\EditPostUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\EditPostInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\UpdateConfirmScreenUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\UpdateConfirmScreenInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\UpdateConfirmActionUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\UpdateConfirmActionInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\CsvUploadActionUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\CsvUploadActionInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\Post\CsvUploadScreenUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\Post\CsvUploadScreenInteractor::class,
        );

        //Login
        $this->app->bind(
            \Domain\Usecase\Bulletin\User\PostLoginUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\PostLoginInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\CreateLoginUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\CreateLoginInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\GetLogoutUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\GetLogoutInteractor::class,
        );

        //User
        $this->app->bind(
            \Domain\Usecase\Bulletin\User\GetAllUsersUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\GetAllUsersInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\CreateUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\CreateUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\ConfirmUserScreenUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\ConfirmUserScreenInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\ConfirmUserActionUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\ConfirmUserActionInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\SearchUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\SearchUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\DeleteUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\DeleteUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\ShowUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\ShowUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\EditUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\EditUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\UpdateConfirmScreenUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\UpdateConfirmScreenInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\UpdateConfirmActionUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\UpdateConfirmActionInteractor::class,
        ); 

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\ChangePasswordScreenUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\ChangePasswordScreenInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\ChangePasswordActionUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\ChangePasswordActionInteractor::class,
        ); 

        //bind repositories
        $this->app->bind(
            \Domain\Repository\Bulletin\Post\PostRepository::class,
            \App\RepositoryImpl\Post\PostRepositoryImpl::class,
        );

        $this->app->bind(
            \Domain\Repository\Bulletin\User\UserRepository::class,
            \App\RepositoryImpl\User\UserRepositoryImpl::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}