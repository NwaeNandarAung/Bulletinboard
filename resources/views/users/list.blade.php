@extends('layouts.default')
@section('content')
  <h3 align="center" style="margin-top:20px; color:#999; color:#999;">User Lists</h3><br/>
  <div class="container">
    <div class="row my-2">
      <div class="col-md-10">
        <form class="form-inline my-2 my-lg-0" action="{{ url('users/search') }}" method="GET">
          <input class="form-control mr-sm-2" type="search" placeholder="Name" name="name" aria-label="Search">
          <input class="form-control mr-sm-2" type="search" placeholder="Email" name="email" aria-label="Search">
          <input class="form-control mr-sm-2" type="search" placeholder="Created From" name="created_from" aria-label="Search">
          <input class="form-control mr-sm-2" type="search" placeholder="Created To" name="created_to"  aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="col-md-2">
        <a href="{{ url('/user') }}" class="btn btn-outline-primary my-2 my-sm-0 mx-2" role="button">Add</a>
      </div>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Created User</th>
          <th scope="col">Phone</th>
          <th scope="col">Birth Date</th>
          <th scope="col">Created Date</th>
          <th scope="col" colspan="2"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($userData as $user)
          <tr>
          <td><a href="javascript:void(0)" id="show-post" data-toggle="modal" data-target="#crud-user-show{{ $user->id }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_user_id }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ date('d/m/Y', strtotime($user->dob)) }}</td>
            <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
            <td>
              <form action="{{ url('/user', ['id' => $user->id]) }}" method="post">
                <input class="btn btn-default" type="submit" value="Delete" id="mybutton" onclick="userFunction()"/>
                @method('delete')
                @csrf
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="pagination-bar text-center">
       {{ $userData->links() }}
  </div>

  <!-- Show post modal -->
  @foreach($userData as $user)
    <div class="modal fade" id="crud-user-show{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">User Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="offset-6 col-md-6">
              <img src="{{ asset($user->updated_user_id.'/images/'.$user->profile) }}" height="100px" width="100px">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <strong>Name</strong>
              </div>
              <div class="col-md-2">
                <strong>:</strong>
              </div>
              <div class="col-md-6">
                {{$user->name}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <strong>Email</strong>
              </div>
              <div class="col-md-2">
                <strong>:</strong>
              </div>
              <div class="col-md-6">
                {{$user->email}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <strong>Type</strong>
              </div>
              <div class="col-md-2">
                <strong>:</strong>
              </div>
              <div class="col-md-6">
                {{$user->type}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <strong>DOB</strong>
              </div>
              <div class="col-md-2">
                <strong>:</strong>
              </div>
              <div class="col-md-6">
                {{$user->dob}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <strong>Phone</strong>
              </div>
              <div class="col-md-2">
                <strong>:</strong>
              </div>
              <div class="col-md-6">
                {{$user->phone}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <strong>Address</strong>
              </div>
              <div class="col-md-2">
                <strong>:</strong>
              </div>
              <div class="col-md-6">
                {{$user->address}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection