<?php

namespace App\RepositoryImpl\Post;

use Domain\Repository\Bulletin\Post\PostRepository;
use DB;
use Domain\Models\Post;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Auth;

class PostRepositoryImpl implements PostRepository
{
    public function getAllPostsInfo($input): ?array
    {
        $query = DB::table('posts');

        if (Auth::user()->type == '1') {
            $query->join('users', 'posts.created_user_id', '=', 'users.id')
                  ->select('posts.*','users.name as user_name');
        } else {
            $query->join('users', 'posts.created_user_id', '=', 'users.id')
                  ->where('posts.created_user_id', '=', Auth::id())
                  ->select('posts.*','users.name as user_name');
        }

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function createPostInfo($input): ?Post 
    {
        $query = DB::table('posts');
        $query->insertGetId([
            'title' => $input->title,
            'description' => $input->description,
            'created_user_id' => Auth::id(),  
            'updated_user_id' => Auth::id(),   
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return Post::createInstance($query->latest()->first());
    }

    public function getPostInfoByTitle($title): ?array
    {
        $query = DB::table('posts');
        $query->where('title', '=', $title);

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function searchPostInfo($search): ?array
    {
        if ($search) {
        $query = DB::table('posts');
        $query->where('title', 'LIKE', "%" . $search . "%")
            ->orWhere('description', 'LIKE', "%" . $search . "%");
        }

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function deletePostInfo($id): ?array
    {
        $query = DB::table('posts');
        $query->where('id', '=', $id)
              ->delete();

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function editPostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description','status','created_user_id','created_at','updated_user_id','updated_at');
        
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function getUpdateConfirmPostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description','status','created_user_id','created_at','updated_user_id','updated_at');
       
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function getUpdatePostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description');

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function detailPostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description','status','created_user_id','created_at','updated_user_id','updated_at');
        
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function csvInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description');
        
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}