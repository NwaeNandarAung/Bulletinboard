<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\ConfirmPostRepository;
use DB;
use Domain\Models\Post;

class ConfirmPostRepositoryImpl implements ConfirmPostRepository
{
    public function getConfirmPostInfo($input): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description','status','created_user_id','updated_user_id','created_at','updated_at')
        ->where('id','=','1');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}