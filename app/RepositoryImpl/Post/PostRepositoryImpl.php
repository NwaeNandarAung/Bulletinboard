<?php

namespace App\RepositoryImpl\Post;

use Domain\Repository\Bulletin\Post\PostRepository;
use DB;
use Domain\Models\Post;
use Domain\Exceptions\BulletinWebException;
use Auth;

class PostRepositoryImpl implements PostRepository
{
    public function getAllPostsInfo($input): ?array
    {
        $query = DB::table('posts');

        if (Auth::user()->type == '1') {
            $query->select('users.name as name','posts.*')
                  ->join('users', 'posts.created_user_id', '=', 'users.id')
                  ->orderBy('posts.id');
        } else {
            $query->select('users.name as name','posts.*')
                  ->join('users', 'posts.created_user_id', '=', 'users.id')
                  ->where('posts.created_user_id', '=', Auth::id())
                  ->orderBy('posts.id');
        }

        return $query->get()->map(function ($item) {
            return Post::listInstance($item);
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
        $query->join('users', 'posts.created_user_id', '=', 'users.id')
              ->where('posts.title', 'LIKE', "%" . $search . "%")
              ->orWhere('posts.description', 'LIKE', "%" . $search . "%")
              ->orWhere('users.name', 'LIKE', "%" . $search . "%")
              ->orderBy('posts.id');
        }

        return $query->get()->map(function ($item) {
            return Post::listInstance($item);
        })->toArray();
    }

    public function deletePostInfo($postId): ?array
    {
        $query = DB::table('posts');
        $query->where('id', '=', $postId)
              ->delete();

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function editPostInfo($postId): ?array
    {
        $query = DB::table('posts');
        $query->where('id', '=', $postId);

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function getUpdateConfirmPostInfo($input): ?array
    {  
        $query = DB::table('posts');
        $query->where('title', '=', $input->title)
              ->where('id', '!=', $input->id);

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function getUpdatePostInfo($input, $postId): ?array
    {
        $updateDetails = [
            'title' => $input->title,
            'description' => $input->description,
            'status'=> $input->status,
            'updated_user_id'=>Auth::id(),
            'updated_at'=>now()
        ];

        $query = DB::table('posts');
        $query->where('id', '=', $postId)
              ->update($updateDetails);

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}