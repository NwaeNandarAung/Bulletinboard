@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">User Profile &nbsp;</h3><br/>
    <form class="form-horizontal" method="GET" action="{{ url('/user', ['id' => Auth::user()->id]) }}">
      <table class="table table-borderless" align="center" style="width:50%">
        <tr>
          <td colspan="2"></td>
          <td align="right">
            @if(file_exists(Auth::user()->updated_user_id.'/images/'.Auth::user()->profile))
              <img src="{{ asset(Auth::user()->updated_user_id.'/images/'.Auth::user()->profile) }}" height="100px" width="100px">
            @else
              <img src="{{ asset(Auth::user()->created_user_id.'/images/'.Auth::user()->profile) }}" height="100px" width="100px">
            @endif
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Name</label>
          </td> 
          <td colspan="2">
              <label>{{Auth::user()->name}}</label>
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Email Address</label> 
          </td>
          <td colspan="2">
              <label>{{Auth::user()->email}}</label>  
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Type</label> 
          </td>
          <td colspan="2">
            @if(Auth::user()->type==1)
              <label>User</label>
            @else
              <label>Admin</label>
            @endif
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Phone</label>
          </td>
          <td colspan="2">
              {{Auth::user()->phone}}
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Date of Birth</label>
          </td>
          <td colspan="2">
              {{Auth::user()->dob}}
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Address</label>
          </td>
          <td colspan="2">
              {{Auth::user()->address}}
          </td>
        </tr>
        <tr align="center">
          <td colspan="3">
          <button type="submit" class="btn btn-primary">Edit</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
@endsection