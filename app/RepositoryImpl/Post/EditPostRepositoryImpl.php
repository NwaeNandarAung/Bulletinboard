<?php
namespace App\RepositoryImpl\Post;
use Domain\Repository\Bulletin\Post\EditPostRepository;
use DB;
use Domain\Models\Post;

class EditPostRepositoryImpl implements EditPostRepository
{
    public function editPostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description','status','created_user_id','created_at','updated_user_id','updated_at');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}