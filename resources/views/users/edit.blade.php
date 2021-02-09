@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Update User</h3><br/>
    <form class="form-horizontal" method="POST" id="userCreateForm" enctype="multipart/form-data" action="{{ url('/user/updateconfirm', ['id' => Auth::user()->id]) }}">
      {{ csrf_field()}}
      <div class="form-group row">
        <div class="offset-sm-9 col-sm-3">
          <img src="{{ url('images/'.Auth::user()->profile) }}" height="100px" width="100px">
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Name</label>
        <div class="col-sm-6">
          <input type="text"  class="form-control" name="name"  value="{{ Auth::user()->name }}">
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-6">
          <input type="email"  class="form-control" name="email" value="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Type</label>
        <div class="col-sm-6">
          @if(Auth::user()->type==1)
            <select name="type" class="form-control" value="{{ Auth::user()->type }}" required>
              <option value="{{ Auth::user()->type }}" selected>Admin</option>
              <option value="0">User</option>
            </select>
          @else           
            <input type="hidden" class="form-control" name="type" value="{{ Auth::user()->type }}">
            <input type="label" class="form-control" name="user" value="User" readonly>
          @endif   
        </div>
        <div class="col-md-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-6">
          <input type="text"  class="form-control" name="phone" value="{{ Auth::user()->phone }}">
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Date of Birth</label>
        <div class="col-sm-6">
          <input type="date" class="form-control" name="dob" value="{{ Auth::user()->dob }}">
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Address</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="address" id="address" rows="3">{{ Auth::user()->address }}</textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="offset-sm-2 col-sm-2 col-form-label">Profile</label>
        <div class="col-sm-4">
          <input type="file" name="profile" accept="image/*" class="form-control-file" value="{{ Auth::user()->profile }}" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
        </div>
        <div class="col-sm-2">
          <img id="output" src="{{ url('images/'.Auth::user()->profile) }}" width="100" height="100">
        </div>
        <div class="col-sm-2">
          <span style='color:red;'>*</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="offset-sm-2 col-sm-4 col-form-label"><a href="{{ url('user/1/password') }}">Change Password</a></label>
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