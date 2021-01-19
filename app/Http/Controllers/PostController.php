<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Input\Bulletin\GetPostInput;
use Domain\Usecase\Bulletin\GetPostUsecase;
use Domain\Models\Post as Post;
use Domain\Input\Bulletin\GetAllPostsInput;
use Domain\Usecase\Bulletin\GetAllPostsUsecase;
use Domain\Input\Bulletin\CreatePostInput;
use Domain\Usecase\Bulletin\CreatePostUsecase;
use Domain\Input\Bulletin\ConfirmPostInput;
use Domain\Usecase\Bulletin\ConfirmPostUsecase;
use Domain\Input\Bulletin\EditPostInput;
use Domain\Usecase\Bulletin\EditPostUsecase;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,GetAllPostsUsecase $usecase)
    {    
        $input=new GetAllPostsInput(
        $request->get('title'),
        $request->get('description'),
        $request->get('status'),
        $request->get('created_user_id'),
        $request->get('updated_user_id'),
        $request->get('created_at'),
        $request->get('updated_at'),
    );
        $output=$usecase->handle($input);
            
        return $output->presentation();    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreatePostUsecase $usecase)
    {
            $output=$usecase->handle();
            return $output->presentation();   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request, ConfirmPostUsecase $usecase)
    {
        $input=new ConfirmPostInput(
            $request->get('title'),
            $request->get('description'),
            $request->get('status'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output=$usecase->handle($input);
        
        return $output->presentation();       
    } 

    public function store(Request $request,GetPostUsecase $usecase)
    {
        $input=new GetPostInput(    
            $request->get('title'),
            $request->get('description'),
            $request->get('status'),
            $request->get('created_user_id'),
            $request->get('updated_user_id'),
            $request->get('created_at'),
            $request->get('updated_at'),
        );
        $output=$usecase->handle($input);
        
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
    public function edit($id,EditPostUsecase $usecase)
    {
        $output=$usecase->handle();
        return $output->presentation();  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
