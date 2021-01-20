<?php
namespace App\RepositoryImpl\Post;
use Domain\Repository\Bulletin\Post\PostRepository;
use DB;
use Domain\Models\Post;

class PostRepositoryImpl implements PostRepository
{
    public function getPostInfo(): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}

