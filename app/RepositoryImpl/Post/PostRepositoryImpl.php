<?php

namespace App\RepositoryImpl\Post;

use Domain\Repository\Bulletin\Post\PostRepository;
use DB;
use Domain\Models\Post as Post;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Auth;

class PostRepositoryImpl implements PostRepository
{
    public function getAllPostsInfo($input): ?array
    {
        $query = DB::table('posts');

        if(Auth::user()->type=='1')
        {
            $query->select('title','description','created_user_id','created_at');
        }
        else
        {
            $query->where('created_user_id','=', Auth::id());
        }

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function getConfirmPostInfo($input): ?array
    {
        $query = DB::table('posts');
        if( $query->whereTitle($input->title)->count()>0)
        {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Post Already Existed");
        }
        else{
            return $query->get()->map(function ($item) {
                return Post::createInstance($item);
            })->toArray();
        }
    }

    public function getPostInfo($input): ?array
    {
        $query = DB::table('posts');
        $query -> insert( 
                            array ('title' => $input->title,
                                   'description' => $input->description,
                                   'status' => $input->status,
                                   'created_user_id' => $input->createdUserId,
                                   'updated_user_id' => $input->updatedUserId,
                                   'created_at' => $input->createdAt,
                                   'updated_at' => $input->updatedAt)
                            );

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