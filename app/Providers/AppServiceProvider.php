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

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\EditUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\EditUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\UpdateUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\UpdateUserInteractor::class,
        ); 

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\UpdateConfirmUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\UpdateConfirmUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\UpdateConfirmUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\UpdateConfirmUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\UpdateConfirmUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\UpdateConfirmUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\DetailUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\DetailUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\ShowUserUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\ShowUserInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\EditPasswordUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\EditPasswordInteractor::class,
        );

        $this->app->bind(
            \Domain\Usecase\Bulletin\User\UpdatePasswordUsecase::class,
            \Domain\Usecase\Bulletin\Interactor\User\UpdatePasswordInteractor::class,
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