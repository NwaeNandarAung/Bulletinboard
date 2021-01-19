<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\UpdatePostRepository;
use DB;
use Domain\Models\Post;

class UpdatePostRepositoryImpl implements UpdatePostRepository
{
    public function getUpdatePostInfo(): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}
