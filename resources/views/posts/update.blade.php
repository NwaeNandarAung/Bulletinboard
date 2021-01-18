@extends('layouts.default')
@section('content')
<div class="container">
   <h3 align="center" style="margin-top:20px;">Update Post</h3><br/>
   <form class="form-horizontal" method="post" action="/posts/1">
    {{ csrf_field() }}
        <div class="form-group row">
            <label for="staticEmail" class="offset-sm-2 col-sm-2 col-form-label">Title</label>
            <div class="col-sm-6">
            <input type="text"  class="form-control" id="staticEmail" name="utitle"  value="title">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="offset-sm-2 col-sm-2 col-form-label">Description</label>
            <div class="col-sm-6">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">description</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-8 col-sm-2">
            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            <button type="reset" class="btn btn-outline-primary mb-2">Clear</button>
            </div>
        </div>
    </form>
  </div>
  @endsection