@extends('layouts.default')
@section('content')
  <h3 align="center" style="margin-top:20px; color:#999;">Post Lists</h3><br/>
  <div class="container">
    <div class="row my-2">
      <div class="col-md-6">
        <form class="form-inline my-2 my-lg-0" action="{{ url('posts/search') }}" method="GET">
          <input type="text" class="form-control mr-sm-2"  placeholder="Search" name="search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="col-md-2">
        <a href="{{ url('/post') }}" class="btn btn-outline-primary my-2 my-sm-0 mx-2" role="button">Add</a>
      </div>
      <div class="col-md-2">
        <a href="{{ url('/posts/excel') }}" class="btn btn-outline-primary my-2 my-sm-0 mx-2" role="button">Upload</a>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-outline-primary my-2 my-sm-0" role="button">Download</a>
      </div>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Post Title</th>
          <th scope="col">Post Description</th>
          <th scope="col">Posted User</th>
          <th scope="col">Posted Date</th>
          <th scope="col" colspan="2"></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($postData as $post)
          <tr>
            <td><a href="javascript:void(0)" id="show-post" data-toggle="modal" data-target="#crud-modal-show{{ $post->id }}">{{ $post->title }}</a></td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->created_at }}</td>
            <td><a href="{{ url('/post', ['id' => $post->id]) }}">Edit</a></td>
            <td>
              <form action="{{ url('/post', ['id' => $post->id]) }}" method="post">
                <input class="btn btn-default" type="submit" value="Delete" id="mybutton" onclick="myFunction()"/>
                @method('delete')
                @csrf
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6">
              <p align="center">There is no post yet!</p>
            </td>
          </tr>
        @endforelse 
      </tbody>
    </table>
    {!! $postData->render() !!}
  </div>

  <!-- Show post modal -->
  @foreach($postData as $post)
    <div class="modal fade" id="crud-modal-show{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Post Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table width="100%">
              <tr>
                <td><strong>Title</strong></td>
                <td><strong>:</strong></td>
                <td>{{$post->title}}</td>
              </tr>
              <tr>
                <td><strong>Description</strong></td>
                <td><strong>:</strong></td>
                <td>{{$post->description}}</td>
              </tr>
              <tr>
                <td><strong>Status</strong></td>
                <td><strong>:</strong></td>
                <td>{{$post->status}}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection