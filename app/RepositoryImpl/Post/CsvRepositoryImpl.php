<?php
namespace App\RepositoryImpl\Post;
use Domain\Repository\Bulletin\Post\CsvRepository;
use DB;
use Domain\Models\Post;

class CsvRepositoryImpl implements CsvRepository
{
    public function csvInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description');
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}
