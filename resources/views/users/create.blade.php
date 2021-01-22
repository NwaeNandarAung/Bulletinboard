@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Create User</h3><br/>
    <form class="form-horizontal">
      <div class="form-group row">
        <label for="staticEmail" class="offset-sm-2 col-sm-2 col-form-label">Name</label>
        <div class="col-sm-6">
          <input type="text"  class="form-control" id="staticEmail" placeholder="Name">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-6">
          <input type="email"  class="form-control" id="staticEmail" placeholder="Email Address">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Password</label>
        <div class="col-sm-6">
          <input type="password"  class="form-control" id="staticEmail" placeholder="Password">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-6">
          <input type="password"  class="form-control" id="staticEmail" placeholder="Confirm Password">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Type</label>
        <div class="col-sm-6">
          <select id="inputState" class="form-control">
            <option selected>Choose Type</option>
            <option>Admin</option>
            <option>User</option>
          </select>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-6">
          <input type="text"  class="form-control" id="staticEmail" placeholder="Phone">
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Date of Birth</label>
        <div class="col-sm-6">
          <input type="date"  class="form-control" id="staticEmail" placeholder="Date of Birth">
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Address</label>
        <div class="col-sm-6">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="offset-sm-2 col-sm-2 col-form-label">Profile</label>
        <div class="col-sm-6">
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
          <img src="" height="100px" width="100px">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-8 col-sm-2">
          <a href="{{ url('user/createconfirm/1') }}" class="btn btn-primary mb-2" role="button">Confirm</a>
          <button type="reset" class="btn btn-outline-primary mb-2">Clear</button>
        </div>
      </div>
    </form>
  </div>
@endsection