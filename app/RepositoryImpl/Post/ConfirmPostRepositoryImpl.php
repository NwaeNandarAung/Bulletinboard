<?php
namespace App\RepositoryImpl\Post;
use Domain\Repository\Bulletin\Post\ConfirmPostRepository;
use DB;
use Domain\Models\Post;

class ConfirmPostRepositoryImpl implements ConfirmPostRepository
{
    public function getConfirmPostInfo(): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}