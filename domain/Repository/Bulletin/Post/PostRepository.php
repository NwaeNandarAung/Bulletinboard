<?php

namespace Domain\Repository\Bulletin\Post;

use Domain\Models\Post;

Interface PostRepository
{
    public function getAllPostsInfo($input): ?array;

    public function createPostInfo($input): ?Post;

    public function getPostInfoByTitle($title): ?array;

    public function editPostInfo($postId): ?array;

    public function getUpdateConfirmPostInfo(): ?array;

    public function getUpdatePostInfo(): ?array;

    public function searchPostInfo($search): ?array;

    public function deletePostInfo($postId): ?array;
}