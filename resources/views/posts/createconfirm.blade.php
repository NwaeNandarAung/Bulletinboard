@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Create Post Confirmation</h3><br/>
    <form class="form-horizontal" method="post" action="{{ url('/post') }}">
      {{ csrf_field() }}
      <table class='table table-borderless'>
        <tr>
          <td>
            <label>Title</label>
          </td>
          <td>
            @foreach ($postData as $post)
              <label>{{$post->title}}</label>
            @endforeach
          <td>
        </tr>
        <tr>
          <td>
            <label>Description</label>
          </td>
          <td>
            @foreach ($postData as $post)
              <label>{{$post->description}}</label>
            @endforeach
          <td>
        </tr>
      </table>
      <div class="form-group row">
      <div class="offset-md-9 col-md-3">
          <button type="submit" class="btn btn-primary mb-2">Create</button>
          <button type="reset" class="btn btn-outline-primary mb-2">Cancel</button>
        </div>
      </div>
    </form>
  </div>
@endsection