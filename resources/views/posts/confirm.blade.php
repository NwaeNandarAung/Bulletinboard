@extends('layouts.default')
  @section('content')
    <div class="container">
      <h3 align="center" style="margin-top:20px;">Create Post Confirmation</h3><br/>
        <form class="form-horizontal" method="post" action="{{ url('/post') }}">
          {{ csrf_field() }}
            <table class='table table-borderless'>
              <tr>
                <td>Title</td> 
                <td>
                @foreach ($postData as $post)
                {{$post->title}}
                @endforeach  
                <td>
              </tr>
              <tr>
                <td>Description</td>
                <td>
                @foreach ($postData as $post)
                {{$post->description}}
                @endforeach  
                <td> 
              </tr>
            </table>
            <div class="form-group row">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary mb-2">Create</button>
                <button type="reset" class="btn btn-outline-primary mb-2">Cancel</button>
              </div>
            </div>
        </form>
    </div>
  @endsection