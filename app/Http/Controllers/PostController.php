<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Input\Bulletin\Post\GetAllPostsInput;
use Domain\Usecase\Bulletin\Post\GetAllPostsUsecase;
use Domain\Input\Bulletin\Post\CreatePostInput;
use Domain\Usecase\Bulletin\Post\CreatePostUsecase;
use Domain\Input\Bulletin\Post\ConfirmPostScreenInput;
use Domain\Usecase\Bulletin\Post\ConfirmPostScreenUsecase;
use Domain\Input\Bulletin\Post\ConfirmPostActionInput;
use Domain\Usecase\Bulletin\Post\ConfirmPostActionUsecase;
use Domain\Input\Bulletin\Post\SearchPostInput;
use Domain\Usecase\Bulletin\Post\SearchPostUsecase;
use Domain\Input\Bulletin\Post\DeletePostInput;
use Domain\Usecase\Bulletin\Post\DeletePostUsecase;
use Domain\Input\Bulletin\Post\EditPostInput;
use Domain\Usecase\Bulletin\Post\EditPostUsecase;
use Domain\Input\Bulletin\Post\UpdateConfirmScreenInput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmScreenUsecase;
use Domain\Input\Bulletin\Post\UpdateConfirmActionInput;
use Domain\Usecase\Bulletin\Post\UpdateConfirmActionUsecase;
use Domain\Input\Bulletin\Post\CsvUploadActionInput;
use Domain\Usecase\Bulletin\Post\CsvUploadActionUsecase;
use Domain\Input\Bulletin\Post\CsvUploadScreenInput;
use Domain\Usecase\Bulletin\Post\CsvUploadScreenUsecase;

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

    public function createConfirm(Request $request, ConfirmPostScreenUsecase $usecase)
    {
        $input = new ConfirmPostScreenInput(
            $request->get('title'),
            $request->get('description')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ConfirmPostActionUsecase $usecase)
    {
        $input = new ConfirmPostActionInput(
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

    public function updateConfirm(Request $request, UpdateConfirmScreenUsecase $usecase)
    {
        $input = new UpdateConfirmScreenInput(
            $request->get('id'),
            $request->get('title'),
            $request->get('description'),
            $request->has('status')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function update(Request $request,$postId,UpdateConfirmActionUsecase $usecase)
    {
        $input = new UpdateConfirmActionInput(
            $postId,
            $request->get('title'),
            $request->get('description'),
            $request->has('status')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function import(Request $request,CsvUploadActionUsecase $usecase)
    {
        $input = new CsvUploadActionInput();
        $output = $usecase->handle($input);

        return $output->presentation();
    }

    public function upload(Request $request,CsvUploadScreenUsecase $usecase)
    {
        $input = new CsvUploadScreenInput(
            $request->file('file')
        );
        $output = $usecase->handle($input);

        return $output->presentation();
    }
}