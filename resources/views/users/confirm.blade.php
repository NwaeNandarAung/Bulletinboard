@extends('layouts.default')
  @section('content')
    <div class="container">
      <h3 align="center" style="margin-top:20px;">Create User Confirmation</h3><br/>
        <form class="form-horizontal" method="post" action="{{ url('/user') }}">
          {{ csrf_field() }}
            <table class='table table-borderless'>
              <tr>
                <td colspan='2'></td> 
                <td>
                @foreach ($userData as $user)
                <img src="{{url($user->profile)}}" height="100px" width="100px">
                @endforeach  
                <td>
              </tr>
              <tr>
                <td>Name</td> 
                <td>
                @foreach ($userData as $user)
                {{$user->name}}
                @endforeach  
                <td>
              </tr>
              <tr>
                <td>Email Address</td>
                <td>
                @foreach ($userData as $user)
                {{$user->email}}
                @endforeach  
                <td> 
              </tr>
              <tr>
                <td>Password</td>
                <td>
                @foreach ($userData as $user)
                {{$user->password}}
                @endforeach  
                <td> 
              </tr>
              <tr>
                <td>Type</td>
                <td>
                @foreach ($userData as $user)
                {{$user->type}}
                @endforeach  
                <td> 
              </tr>
              <tr>
                <td>Phone</td>
                <td>
                @foreach ($userData as $user)
                {{$user->phone}}
                @endforeach  
                <td> 
              </tr>
              <tr>
                <td>Date of Birth</td>
                <td>
                @foreach ($userData as $user)
                {{$user->dob}}
                @endforeach  
                <td> 
              </tr>
              <tr>
                <td>Address</td>
                <td>
                @foreach ($userData as $user)
                {{$user->address}}
                @endforeach  
                <td> 
              </tr>
            </table>
            <div class="form-group row">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary mb-2">Create</button>
                <button type="reset" class="btn btn-outline-primary mb-2">Cancel</button>
              </div>
            </div>
        </form>
    </div>
  @endsection