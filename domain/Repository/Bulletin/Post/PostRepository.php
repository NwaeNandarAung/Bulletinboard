<?php

namespace Domain\Repository\Bulletin\Post;

use Domain\Models\Post;

Interface PostRepository
{
    public function getAllPostsInfo($input);

    public function createPostInfo($input): ?Post;

    public function getPostInfoByTitle($title): ?array;

    public function editPostInfo($postId): ?array;

    public function getUpdateConfirmPostInfo($input): ?array;

    public function getUpdatePostInfo($input, $postId): ?array;

    public function searchPostInfo($search);

    public function deletePostInfo($postId): ?array;

    public function csvImportInfo($file): ?array;

    public function csvUploadInfo($importData_arr): ?array;
}