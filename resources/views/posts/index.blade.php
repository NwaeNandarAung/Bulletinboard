@extends('layouts.default')
@section('content')
   <h4 align="center" style="margin-top:20px; color:#999;">Post Lists</h3><br/>
<div class="row my-2">
    <div class="col-md-6">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="col-md-2">
        <a href="#" class="btn btn-outline-primary my-2 my-sm-0 mx-2" role="button">Add</a>
    </div>
    <div class="col-md-2">
        <a href="#" class="btn btn-outline-primary my-2 my-sm-0 mx-2" role="button">Upload</a>
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
      <th scope="col">Post User</th>
      <th scope="col">Posted Date</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($postData as $post)
    <tr>
      <td>{{ $post->title }}</td>
      <td>{{ $post->description }}</td>
      <td>{{ $post->created_user_id }}</td>
      <td>{{ $post->created_at }}</td>
      <td><a href="{{ route('posts.edit', $post->id) }}">Edit</a></td>
      <td><a href="">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection