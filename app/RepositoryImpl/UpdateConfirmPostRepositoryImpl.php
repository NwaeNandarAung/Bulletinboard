<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\UpdateConfirmPostRepository;
use DB;
use Domain\Models\Post;

class UpdateConfirmPostRepositoryImpl implements UpdateConfirmPostRepository
{
    public function getUpdateConfirmPostInfo(): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description','status','created_user_id','created_at','updated_user_id','updated_at');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}
