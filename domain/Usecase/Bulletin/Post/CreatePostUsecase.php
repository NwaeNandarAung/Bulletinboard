<?php
namespace Domain\Usecase\Bulletin\Post;
use Domain\Output\Bulletin\Post\CreatePostOutput;

interface CreatePostUsecase{
    public function handle():CreatePostOutput;
}