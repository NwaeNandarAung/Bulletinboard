<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Input\Bulletin\Post\PostPostInput;
use Domain\Usecase\Bulletin\Post\PostPostUsecase;
use Domain\Input\Bulletin\Post\GetAllPostsInput;
use Domain\Usecase\Bulletin\Post\GetAllPostsUsecase;
use Domain\Input\Bulletin\Post\CreatePostInput;
use Domain\Usecase\Bulletin\Post\CreatePostUsecase;
use Domain\Input\Bulletin\Post\ConfirmPostInput;
use Domain\Usecase\Bulletin\Post\ConfirmPostUsecase;
use Domain\Input\Bulletin\Post\SearchPostInput;
use Domain\Usecase\Bulletin\Post\SearchPostUsecase;
use Domain\Input\Bulletin\Post\DeletePostInput;
use Domain\Usecase\Bulletin\Post\DeletePostUsecase;
use Domain\Input\Bulletin\Post\EditPostInput;
use Domain\Usecase\Bulletin\Post\EditPostUsecase;
use Domain\Input\Bulletin\Post\UpdatePostInput;
use Domain\Usecase\Bulletin\Post\UpdatePostUsecase;
use Domain\Input\Bulletin\Post\UpdateConfirmPostInput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmPostUsecase;
use Domain\Input\Bulletin\Post\CsvDownloadInput;
use Domain\Usecase\Bulletin\Post\CsvDownloadUsecase;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetAllPostsUsecase $usecase)
    {
        $input = new GetAllPostsInput();
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
            $request->get('description')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function store(Request $request,PostPostUsecase $usecase)
    {
        $input = new PostPostInput(
            $request->get('title'),
            $request->get('description')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function search(Request $request, SearchPostUsecase $usecase)
    {
        $input = new SearchPostInput(
            $request->get('search')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$postId, DeletePostUsecase $usecase)
    {
        $input = new DeletePostInput($postId);
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($postId,EditPostUsecase $usecase)
    {
        $input = new EditPostInput($postId);
        $output = $usecase->handle($input);

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
            $postId,
            $request->get('title'),
            $request->get('description'),
            $request->has('status'),
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function updateconfirm(Request $request, UpdateConfirmPostUsecase $usecase)
    {
        $input = new UpdateConfirmPostInput(
            $request->get('id'),
            $request->get('title'),
            $request->get('description'),
            $request->has('status')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function export(Request $request,CsvDownloadUsecase $usecase)
    {
        $input = new CsvDownloadInput(
            $request->get('search')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }
}