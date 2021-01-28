@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Create Post</h3><br/>
    <form class="form-horizontal" method="POST" action="{{ route('createconfirm') }}">
      {{ csrf_field() }}
      <div class="form-group row">
        <label for="title" class="offset-sm-2 col-sm-2 col-form-label">Title</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="title" placeholder="Title" required>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>

      <div class="form-group row">
        <label for="description" class="offset-sm-2 col-sm-2 col-form-label">Description</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="description" rows="3" required></textarea>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>

      <div class="form-group row">
        <div class="offset-sm-8 col-sm-2">
          <button type="submit" class="btn btn-primary mb-2">Confirm</button>
          <button type="reset" class="btn btn-outline-primary mb-2">Clear</button>
        </div>
      </div>
    </form>
  </div>
@endsection