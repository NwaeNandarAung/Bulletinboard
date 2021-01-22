@extends('layouts.default')
@section('content')
  <h3 align="center" style="margin-top:20px; color:#999; color:#999;">User Lists</h3><br/>
  <div class="container">
    <div class="row my-2">
      <div class="col-md-10">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Name" aria-label="Search">
          <input class="form-control mr-sm-2" type="search" placeholder="Email" aria-label="Search">
          <input class="form-control mr-sm-2" type="search" placeholder="Created From" aria-label="Search">
          <input class="form-control mr-sm-2" type="search" placeholder="Created To" aria-label="Search">
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
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_user_id }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->dob }}</td>
            <td>{{ $user->created_at }}</td>
            <td><a href="">Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
@endsection