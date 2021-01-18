<?php
namespace Domain\Usecase\Bulletin;
use Domain\Output\Bulletin\CreatePostOutput;

interface CreatePostUsecase{
    public function handle():CreatePostOutput;
}