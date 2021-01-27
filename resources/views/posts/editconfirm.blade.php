@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Update Post Confirmation</h3><br/>
    <form class="form-horizontal" method="post" action="{{ url('/post/1') }}">
      {{ csrf_field()}}
      @method('PUT')
      <table class='table table-borderless'>
        <tr>
          <td>
            <label>Title</label>
          </td>
          @foreach ($postData as $post)
            <td>
              <label>{{$post->title}}</label>
            <td>
          @endforeach
        </tr>
        <tr>
          <td>
            <label>Description</label>
          </td>
          @foreach ($postData as $post)
            <td>
              <label>{{$post->description}}</label>
            <td>
          @endforeach
        </tr>
        <tr>
          <td>
            <label>Status</label>
          </td>
          @foreach ($postData as $post)
            <td>
              <input data-id="1" class="toggle-class" type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $post->status ? 'checked' : '' }} disabled>
            </td>
          @endforeach
        </tr>
      </table>
      <div class="form-group row">
        <div class="offset-md-9 col-md-3">
          <button type="submit" class="btn btn-primary mb-2">Update</button>
          <button type="reset" class="btn btn-outline-primary mb-2">Cancel</button>
        </div>
      </div>
    </form>
  </div>
@endsection