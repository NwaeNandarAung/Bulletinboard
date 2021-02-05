<?php

namespace App\RepositoryImpl\Post;

use Domain\Repository\Bulletin\Post\PostRepository;
use DB;
use Domain\Models\Post;
use Auth;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;

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
            'updated_user_id'=> Auth::id(),
            'updated_at' => now()
        ];

        $query = DB::table('posts');
        $query->where('id', '=', $postId)
              ->update($updateDetails);

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function csvImportInfo($file): ?array
    {
        $filename = $file->getClientOriginalName();
        // File upload location
        $location = Auth::id().'/csv';

        // Upload file
        $file->move($location,$filename);

        // Import CSV to Database
        $filepath = public_path($location."/".$filename);

        // Reading file
        $file = fopen($filepath,"r");

        $importData_arr = array();
        $i = 0;
        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            $num = count($filedata );
            for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
            }
            $i++;
        }
        fclose($file);

        foreach ($importData_arr as $importData) {
            $query = DB::table('posts');
            $query->where('title', '=', $importData[0]);
        }

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }

    public function csvUploadInfo($file): ?array
    {
        $filename = $file->getClientOriginalName();
        $location = Auth::id().'/csv';
        $filepath = public_path($location."/".$filename);
        $file = fopen($filepath,"r");
        $importData_arr = array();
        $i = 0;

        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            $num = count($filedata );
            for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
            }
            $i++;
        }
        fclose($file);

        foreach ($importData_arr as $importData) {
            if (empty($importData[0])) {
                throw new BulletinWebException(ErrorCode::ERROR_0002, "Title is required");
            }
            if (empty($importData[1])) {
                throw new BulletinWebException(ErrorCode::ERROR_0002, "Description is required");
            }
            if (empty( $importData[2])) {
                $importData[2]=1;
            }
            $insertData = array (
                        "title" => $importData[0],
                        "description" => $importData[1],
                        "status" => $importData[2],
                        "created_user_id" => Auth::id(),
                        "updated_user_id" => Auth::id(),
                        "created_at" => now(),
                        "updated_at" => now()
                        );

            $query = DB::table('posts');
            $query->insert($insertData);
        }

        return $query->get()->map(function ($item) {
            return Post::createInstance($item);
        })->toArray();
    }
}