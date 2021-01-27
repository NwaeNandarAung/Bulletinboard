<?php

namespace App\RepositoryImpl\Post;

use Domain\Repository\Bulletin\Post\PostRepository;
use DB;
use Domain\Models\Post;
use Auth;

class PostRepositoryImpl implements PostRepository
{
    public function getAllPostsInfo(): ?array
    {
        $query = DB::table('posts');  

        if(Auth::user()->type=='1')   
        {
            $query->select('title','description','created_user_id','created_at');
        }
        else
        {
            $query->where('id','=', Auth::id());      
        }
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function createPostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description');
        
        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function getConfirmPostInfo($input): ?array
    {
        $query = DB::table('posts');
        $query->where('title','=', $input->title);

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
    
    public function getPostInfo(): ?array
    {
        $query = DB::table('posts');
        $query->select('title','description');

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