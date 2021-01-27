@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">Create User Confirmation</h3><br/>
    <form class="form-horizontal" method="post" action="{{ url('/user') }}">
      {{ csrf_field() }}
      <table class='table table-borderless'>
        <tr>
          <td colspan='2'></td>
          <td>
            @foreach ($userData as $user)
              <img src="{{url($user->profile)}}" height="100px" width="100px">
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label>Name</label>
          </td> 
          <td>
            @foreach ($userData as $user)
              <label> {{$user->name}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label>Email Address</label>
          </td>
          <td>
            @foreach ($userData as $user)
              <label>{{$user->email}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label>Password</label>
          </td>
          <td>
            @foreach ($userData as $user)
              <input type="password" style="border:none;" value=<?php echo $user->password?> readonly/>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label>Type</label>
          </td>
          <td>
            @foreach ($userData as $user)
              <label>{{$user->type}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label>Phone</label>
          </td>
          <td>
            @foreach ($userData as $user)
              <label>{{$user->phone}} </label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label>Date of Birth</label>
          </td>
          <td>
            @foreach ($userData as $user)
              <label>{{$user->dob}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label>Address</label>
          </td>
          <td>
            @foreach ($userData as $user)
              <label>{{$user->address}}</label>
            @endforeach
          </td> 
        </tr>
      </table>
      <div class="form-group row">
        <div class="offset-md-8 col-md-4">
          <button type="submit" class="btn btn-primary mb-2">Create</button>
          <button type="reset" class="btn btn-outline-primary mb-2">Cancel</button>
        </div>
      </div>
    </form>
  </div>
@endsection