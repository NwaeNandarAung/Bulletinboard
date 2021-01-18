<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\ConfirmPostRepository;
use DB;
use Domain\Models\Post;

class ConfirmPostRepositoryImpl implements ConfirmPostRepository
{
    public function getConfirmPostInfo(): ?array
    {
        $query=DB::table('posts');
        $query->select('title','description')
        ->where('id','=','1');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}