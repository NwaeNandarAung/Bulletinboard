@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Update Post</h3><br/>
    @foreach($postData as $post)
      <form class="form-horizontal" id="myForm" method="GET" action="{{ url('/post/updateconfirm', ['id' => $post->id]) }}">
        <input type="hidden" class="form-control" name="id" value="{{ $post->id }}" required/>
        <div class="form-group row">
          <label class="offset-sm-2 col-sm-2 col-form-label">Title</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" required/>
          </div>
          <div class="col-md-2">
            <span style='color:red;'>*</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="offset-sm-2 col-sm-2 col-form-label">Description</label>
          <div class="col-sm-6">
            <textarea id="description" class="form-control" rows="3" name="description" required>{{ $post->description }}</textarea>
          </div>
          <div class="col-md-2">
            <span style='color:red;'>*</span>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputCheckbox" class="offset-sm-2 col-sm-2 col-form-label" style="padding-top:0px;">Status</label>
          <div class="col-sm-6">
            <input type="checkbox" name="status" data-plugin="switchery" data-color="#1bb99a" {{ $post->status == 1 ? 'checked' : ''}} >
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-sm-8 col-sm-2">
            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            <button id="btnClear" class="btn btn-outline-primary mb-2">Clear</button>
          </div>
        </div>
      </form>
    @endforeach
  </div>
@endsection