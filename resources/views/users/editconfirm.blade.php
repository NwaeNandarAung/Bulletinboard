@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Update User Confirmation</h3><br/>
    <form class="form-horizontal" method="post" action="{{ url('/user/1') }}">
      {{ csrf_field()}}
      @method('PUT')
      <table class="table table-borderless" align="center">
        <tr>
          <td colspan="2"></td>
          <td align="right">
          <input type="hidden" name="profile" style="border:none;" value="<?php echo $imageName;?>">
          <img src="{{ asset('images/'.$imageName) }}" width="100" height="100">
          <td>
        </tr>
        <tr>
          <td>
            <label>Name</label>
          </td>
          <td>
            <input type="label" name="name" style="border:none;" value="<?php echo $_POST['name']; ?>">
          <td>
        </tr>
        <tr>
          <td>
            <label>Email Address</label>
          </td>
          <td>
            <input type="label" name="email" style="border:none;" value="<?php echo $_POST['email']; ?>">
          <td>
        </tr>
        <tr>
          <td>
            <label>Type</label>
          </td>
          <td>
          <input type="hidden" name="type" style="border:none;" value="<?php echo $_POST['type']; ?>">
          @if($_POST['type']==0)
          <input type="label" name="user" style="border:none;" value="User">
          @else
          <input type="label" name="user" style="border:none;" value="Admin">
          @endif
          </td>
        </tr>
        <tr>
          <td>
            <label>Phone</label>
          </td>
          <td>
            <input type="label" name="phone" style="border:none;" value="<?php echo $_POST['phone']; ?>">
          <td>
        </tr>
        <tr>
          <td>
            <label>Date of Birth</label>
          </td>
          <td>
          <input type="label" name="dob" style="border:none;" value="<?php echo $_POST['dob']; ?>">
          <td>
        </tr>
        <tr>
          <td>
            <label>Address</label>
          </td>
          <td>
          <input type="label" name="address" style="border:none;" value="<?php echo $_POST['address']; ?>">
          <td>
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