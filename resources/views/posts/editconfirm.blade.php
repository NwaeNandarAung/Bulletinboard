@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Update Post Confirmation</h3><br/>
    <form class="form-horizontal"  method="POST"  action="{{ url('/post', ['id' => $postData->id]) }}">
      {{ csrf_field()}}
      @method('PUT')
      <table class='table table-borderless'>
        <tr>
          <td>
            <label>Title</label>
          </td>
          <td>
            <input type="label" name="title" style="border:none;" value="{{$postData->title}}">
          <td>
        </tr>
        <tr>
          <td>
            <label>Description</label>
          </td>
          <td>
            <input type="label" name="description" style="border:none;" value="{{$postData->description}}">
          <td>
        </tr>
        <tr>
          <td>
            <label>Status</label>
          </td>
          <td>
            <input type="checkbox" name="status" data-plugin="switchery" data-color="#1bb99a" {{ $postData->status == 1 ? 'checked' : ''}}>
          </td>
        </tr>
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