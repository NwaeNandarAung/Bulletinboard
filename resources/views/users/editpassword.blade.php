@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Change Password</h3><br/>
    <form class="form-horizontal" method="post" action="{{ url('/user/1/password') }}">
      {{ csrf_field()}}
      @method('PUT')
      <div class="form-group row">
        <label class="offset-sm-1 col-sm-3 col-form-label">Old Password</label>
        <div class="col-sm-6">
          <input type="password"  class="form-control" name="opassword"  value="123456">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-1 col-sm-3 col-form-label">New Password</label>
        <div class="col-sm-6">
          <input type="password"  class="form-control" placeholder="New Password">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-1 col-sm-3 col-form-label">Confirm New Password</label>
        <div class="col-sm-6">
          <input type="password"  class="form-control" placeholder="Confirm New Password">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-8 col-sm-2">
          <button type="submit" class="btn btn-primary mb-2">Change</button>
          <button type="reset" class="btn btn-outline-primary mb-2">Clear</button>
        </div>
      </div>
    </form>
  </div>
@endsection