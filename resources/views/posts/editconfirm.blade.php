@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Update Post Confirmation</h3><br/>
    <form class="form-horizontal"  method="get"  action="{{ url('/posts') }}">
      <table class='table table-borderless'>
        @foreach($postData as $post)
          <tr>
            <td>
              <label>Title</label>
            </td>
            <td>
              <input type="label" name="title" style="border:none;" value="{{$post->title}}">
            <td>
          </tr>
          <tr>
            <td>
              <label>Description</label>
            </td>
            <td>
              <input type="label" name="description" style="border:none;" value="{{$post->description}}">
            <td>
          </tr>
          <tr>
            <td>
              <label>Status</label>
            </td>
            <td>
              <input type="checkbox" name="status" data-plugin="switchery" data-color="#1bb99a" {{ $post->status == 1 ? 'checked' : ''}}>
            </td>
          </tr>
        @endforeach
      </table>
      <div class="form-group row">
        <div class="offset-md-9 col-md-3">
          <button type="submit" class="btn btn-primary mb-2">Update</button>
          <a href="javascript:history.back()" class="btn btn-outline-primary mb-2" role="button">Cancel</a>
        </div>
      </div>
    </form>
  </div>
@endsection