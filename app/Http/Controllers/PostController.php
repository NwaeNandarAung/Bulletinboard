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
        $request->get('created_user_id'),
        $request->get('created_at')
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
    public function confirm(Request $request,ConfirmPostUsecase $usecase)
    {
        $input=new ConfirmPostInput(
        $request->get('title'),
        $request->get('description'),
        $request->get('created_user_id'),
        $request->get('created_at')
        );
        $output=$usecase->handle($input);
        
        return $output->presentation();       
    } 

    public function store(Request $request,$id,GetPostUsecase $usecase)
    {
        $input=new GetPostInput(    
            $request->get('title'),
            $request->get('description')
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
    public function edit($id)
    {
        
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
