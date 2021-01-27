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
            @foreach ($userData as $user)
              <img src="{{url($user->profile)}}" height="100px" width="100px">
            @endforeach
          <td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Name</label>
          </td> 
          <td colspan="2">
            @foreach ($userData as $user)
              <label>{{$user->name}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Email Address</label>
          </td>
          <td colspan="2">
            @foreach ($userData as $user)
              <label>{{$user->email}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Type</label>
          </td>
          <td colspan="2">
            @foreach ($userData as $user)
              <label>{{$user->type}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Phone</label> 
          </td>
          <td colspan="2">
            @foreach ($userData as $user)
              <label>{{$user->phone}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Date of Birth</label>
          </td>
          <td colspan="2">
            @foreach ($userData as $user)
              <label>{{$user->dob}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Address</label>
          </td>
          <td colspan="2">
            @foreach ($userData as $user)
              <label>{{$user->address}}</label>
            @endforeach
          </td>
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