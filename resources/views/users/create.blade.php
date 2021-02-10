@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Create User</h3><br/>
    <form class="form-horizontal" id="userCreateForm" method="POST" enctype="multipart/form-data" action="{{ url('user/createconfirm') }}" enctype="multipart/form-data">
      {{ csrf_field()}}
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Name</label>
        <div class="col-sm-6">
          <input type="text"  class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-6">
          <input type="email"  class="form-control" name="email" placeholder="Email Address" required>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Password</label>
        <div class="col-sm-6">
          <input type="password"  class="form-control" name="password" placeholder="Password"  pattern="(?=.*\d)(?=.*[A-Z]).{9,}"
          title="Password must be more than 8 characters long, must contain at least 1 Uppercase and 1 Numeric." required>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-6">
          <input type="password"  class="form-control" name="confirmPassword" placeholder="Confirm Password" minlength="8" 
          pattern="(?=.*\d)(?=.*[A-Z]).{9,}" 
          title="Confirm Password must be more than 8 characters long, must contain at least 1 Uppercase and 1 Numeric." required>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Type</label>
        <div class="col-sm-6">
          <select name="type" class="form-control" required>
            <option value="0">Admin</option>
            <option value="1">User</option>
          </select>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Date of Birth</label>
        <div class="col-sm-6">
          <input type="date"  class="form-control" name="dob" placeholder="Date of Birth">
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Address</label>
        <div class="col-sm-6">
          <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Profile</label>
        <div class="col-sm-4">
          <input type="file" name="profile" accept="image/*" class="form-control-file"  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" required>
        </div>
        <div class="col-sm-2">
          <img id="output" src="{{ asset('images/download.png') }}" width="100" height="100">
        </div>
        <div class="col-sm-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-8 col-sm-2">
          <button type="submit" class="btn btn-primary mb-2">Confirm</button>
          <button id="userClear" class="btn btn-outline-primary mb-2">Clear</button>
        </div>
      </div>
    </form>
  </div>
@endsection