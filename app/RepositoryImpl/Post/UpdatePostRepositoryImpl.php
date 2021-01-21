<?php
namespace App\RepositoryImpl\Post;
use Domain\Repository\Bulletin\Post\UpdatePostRepository;
use DB;
use Domain\Models\Post;

class UpdatePostRepositoryImpl implements UpdatePostRepository
{
    public function getUpdatePostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}
