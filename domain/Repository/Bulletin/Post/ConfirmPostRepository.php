<?php
namespace Domain\Repository\Bulletin\Post;

Interface ConfirmPostRepository
{
    public function getConfirmPostInfo():? array;
}