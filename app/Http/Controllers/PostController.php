<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Input\Bulletin\Post\GetPostInput;
use Domain\Usecase\Bulletin\Post\GetPostUsecase;
use Domain\Models\Post as Post;
use Domain\Input\Bulletin\Post\GetAllPostsInput;
use Domain\Usecase\Bulletin\Post\GetAllPostsUsecase;
use Domain\Input\Bulletin\Post\CreatePostInput;
use Domain\Usecase\Bulletin\Post\CreatePostUsecase;
use Domain\Input\Bulletin\Post\ConfirmPostInput;
use Domain\Usecase\Bulletin\Post\ConfirmPostUsecase;
use Domain\Input\Bulletin\Post\EditPostInput;
use Domain\Usecase\Bulletin\Post\EditPostUsecase;
use Domain\Input\Bulletin\Post\UpdatePostInput;
use Domain\Usecase\Bulletin\Post\UpdatePostUsecase;
use Domain\Input\Bulletin\Post\UpdateConfirmPostInput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmPostUsecase;
use Domain\Usecase\Bulletin\Post\DetailPostUsecase;
use Domain\Usecase\Bulletin\Post\CsvUsecase;
use Domain\Input\Bulletin\Post\UserPostInput;
use Domain\Usecase\Bulletin\Post\UserPostUsecase;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,GetAllPostsUsecase $usecase)
    {    
        $input = new GetAllPostsInput(
        $request->get('title'),
        $request->get('description'),
        $request->get('status'),
        $request->get('created_user_id'),
        $request->get('updated_user_id'),
        $request->get('created_at'),
        $request->get('updated_at'),
        );

        $output =  $usecase->handle($input);
        return $output->presentation();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreatePostUsecase $usecase)
    {   
        $input = new CreatePostInput();
           
        $output = $usecase->handle($input);
        return $output->presentation();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createconfirm(Request $request, ConfirmPostUsecase $usecase)
    {
        $input = new ConfirmPostInput(
            $request->get('title'),
            $request->get('description'),
            Auth::user()->id,
        );
        $output = $usecase->handle($input);
        return $output->presentation();
    }

    public function store(Request $request,GetPostUsecase $usecase)
    {
        $input = new GetPostInput(    
            $request->get('title'),
            $request->get('description'),
            $request->get('status'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output = $usecase->handle($input);
        return $output->presentation();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($postId,EditPostUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $postId, UpdatePostUsecase $usecase)
    {
        $input = new UpdatePostInput(
            $request->get('title'),
            $request->get('description'),
            $request->get('status'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output = $usecase->handle($input);
        return $output->presentation();
    }

    public function updateconfirm(Request $request, UpdateConfirmPostUsecase $usecase)
    {
        $input = new UpdateConfirmPostInput(
            $request->get('title'),
            $request->get('description'),
            $request->get('status'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output = $usecase->handle($input);
        return $output->presentation();
    }

    public function detail($postId,DetailPostUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();
    }

    public function csvUpload(CsvUsecase $usecase)
    {
        $output = $usecase->handle();
        return $output->presentation();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
