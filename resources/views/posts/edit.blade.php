@extends('layouts.default')
  @section('content')
    <div class="container">
      <h3 align="center" style="margin-top:20px;">Update Post</h3><br/>
        <form class="form-horizontal">
          <div class="form-group row">
            <label for="staticEmail" class="offset-sm-2 col-sm-2 col-form-label">Title</label>
              <div class="col-sm-6">
                <input type="text"  class="form-control" id="staticEmail" name="utitle"  value="title">
              </div>
              <div class="col-md-2">
                <span style='color:red;'>*</span>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="offset-sm-2 col-sm-2 col-form-label">Description</label>
              <div class="col-sm-6">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">description</textarea>
              </div>
              <div class="col-md-2">
                <span style='color:red;'>*</span>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputCheckbox" class="offset-sm-2 col-sm-2 col-form-label">Status</label>
              <div class="col-sm-6">
                <input data-id="" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">
              </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-8 col-sm-2">
              <a href="{{ url('/update_confirm/1') }}" class="btn btn-primary mb-2" role="button">Confirm</a>
                <button type="reset" class="btn btn-outline-primary mb-2">Clear</button>
            </div>
          </div>
        </form>
    </div>
  @endsection