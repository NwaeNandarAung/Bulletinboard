@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">User Profile &nbsp;</h3><br/>
    <form class="form-horizontal" method="post" action="{{ url('/user') }}">
      {{ csrf_field() }}
      <table class="table table-borderless" align="center" style="width:50%">
        <tr>
          <td colspan="2"></td>
          <td align="right">
            @foreach ($userData as $user)
              <img src="{{url($user->profile)}}" height="100px" width="100px">
             @endforeach
          </td>
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
              {{$user->phone}}
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Date of Birth</label>
          </td>
          <td colspan="2">
            @foreach ($userData as $user)
              {{$user->dob}}
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Address</label>
          </td>
          <td colspan="2">
            @foreach ($userData as $user)
              {{$user->address}}
            @endforeach
          </td>
        </tr>
        <tr align="center">
          <td colspan="3">
          <a href="{{ url('/user/1') }}" class="btn btn-primary px-4" role="button">Edit</a>
          </td>
        </tr>
      </table>
    </form>
  </div>
@endsection