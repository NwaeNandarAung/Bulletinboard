<?php

namespace Domain\Repository\Bulletin\Post;

Interface PostRepository
{
    public function getAllPostsInfo():? array;

    public function getConfirmPostInfo($input):? array;

    public function getPostInfo():? array;

    public function editPostInfo():? array;

    public function getUpdateConfirmPostInfo():? array;

    public function getUpdatePostInfo():? array;

    public function detailPostInfo():? array;

    public function csvInfo():? array;
}