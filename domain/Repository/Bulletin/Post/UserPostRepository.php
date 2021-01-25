<?php
namespace Domain\Repository\Bulletin\Post;

Interface UserPostRepository
{
    public function getUserPostInfo():? array;
}