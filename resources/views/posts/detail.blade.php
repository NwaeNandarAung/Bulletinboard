@extends('layouts.default')
@section('content')
  <div class="container">
    <h3 align="center" style="margin-top:20px; color:#999;">User Details</h3><br/>
    <form class="form-horizontal" method="post" action="{{ url('/user') }}">
      {{ csrf_field() }}
      <table class="table table-borderless" align="center" style="width:75%">
        <tr>
          <td>
            <label style="font-weight:bold;">Title</label>
          </td> 
          <td>
            @foreach ($postData as $post)
              <label>{{$post->title}}</label>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Description</label> 
          </td>
          <td>
            @foreach ($postData as $post)
              <label>{{$post->description}}</label>  
            @endforeach
          </td>
        </tr>
        <tr>
          <td>
            <label style="font-weight:bold;">Status</label> 
          </td>
          <td>
            @foreach ($postData as $post)
              <label>{{$post->status}}</label>
            @endforeach
          </td>
        </tr>
        <tr align="center">
          <td colspan="2">
          <a href="{{ url('/posts') }}" class="btn btn-primary px-4" role="button">Back</a>
          </td>
        </tr>
      </table>
    </form>
  </div>
@endsection