@extends('layouts.default')
  @section('content')
    <div class="container">
      <h3 align="center" style="margin-top:20px;">Update Post Confirmation</h3><br/>
        @foreach ($postData as $post)
          <form class="form-horizontal" method="post" action="{{ url('/post/1') }}">
        @endforeach
          {{ csrf_field()}}
          @method('PUT')
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
              <tr>
                <td>Status</td>
                @foreach ($postData as $post)
                <td><input data-id="1" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $post->status ? 'checked' : '' }} disabled>
                </td>   
                @endforeach
              </tr>
            </table>
            <div class="form-group row">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary mb-2">Update</button>
                <button type="reset" class="btn btn-outline-primary mb-2">Cancel</button>
              </div>
            </div>
          </form>
    </div>
  @endsection