@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Update Post</h3><br/>
    <form class="form-horizontal">
      <div class="form-group row">
        <label for="staticEmail" class="offset-sm-2 col-sm-2 col-form-label">Title</label>
        <div class="col-sm-6">
          @foreach($postData as $post)
            <input type="text"  class="form-control" id="staticEmail" name="utitle" value="{{ $post->title }}">
          @endforeach
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="offset-sm-2 col-sm-2 col-form-label">Description</label>
        <div class="col-sm-6">
          @foreach($postData as $post)
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="udescription">{{ $post->description }}</textarea>
          @endforeach
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputCheckbox" class="offset-sm-2 col-sm-2 col-form-label" style="padding-top:0px;">Status</label>
        <div class="col-sm-6">
          @foreach($postData as $post)
            <input type="checkbox" name="ustatus" data-plugin="switchery" data-color="#1bb99a" {{ $post->status ? 'checked' : ''}} >
          @endforeach
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-8 col-sm-2">
          <a href="{{ url('post/updateconfirm/1') }}" class="btn btn-primary mb-2" role="button">Confirm</a>
          <button type="reset" class="btn btn-outline-primary mb-2">Clear</button>
        </div>
      </div>
    </form>
  </div>
@endsection