<?php
namespace Domain\Repository\Bulletin\Post;

Interface AllPostsRepository
{
    public function getAllPostsInfo():? array;
}