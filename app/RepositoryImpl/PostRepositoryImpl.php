<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\PostRepository;
use DB;
use Domain\Models\Post;

class PostRepositoryImpl implements PostRepository
{
    public function getPostInfo(): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description','created_user_id','created_at');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}

