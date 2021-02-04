@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Upload CSV File</h3><br/>
    <h5>Import File From:</h5>
    <div class="container box">
      <form class="form-horizontal" method="POST" action="{{ url('/posts/import') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
          <div class="col-sm-6">
            <input type="file" name="file" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-sm-8 col-sm-2">
            <button type="submit" class="btn btn-primary mb-2">Import</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection