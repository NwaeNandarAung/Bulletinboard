<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\AllPostsRepository;
use DB;
use Domain\Models\Post;

class AllPostsRepositoryImpl implements AllPostsRepository
{
    public function getAllPostsInfo(): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description','created_user_id','created_at');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}