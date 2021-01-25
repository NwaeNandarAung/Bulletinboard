<?php
namespace App\RepositoryImpl\Post;
use Domain\Repository\Bulletin\Post\UserPostRepository;
use DB;
use Domain\Models\Post;
use Auth;

class UserPostRepositoryImpl implements UserPostRepository
{
    public function getUserPostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description','created_user_id','created_at')
              ->where('id','=', Auth::id());
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}