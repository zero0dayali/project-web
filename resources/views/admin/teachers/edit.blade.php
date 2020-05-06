@extends('layouts.mainAdmin')
@section('title','teachers edit')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Edit Data</h4>
          </div>
          <div class="card-body">
          <form action="{{url('teachers-update/'.$teachers->id)}}" method="post">
              {{ csrf_field() }}
              @method('put')
              <div class="form-group">
                <label for="nik">Usernik</label>
                <input type="text" name="nik" class="form-control" id="nik" value="{{$teachers->nik}}">
                <small id="nik" class="form-text text-muted">Please type your new name.</small>
              </div>
              <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$teachers->name}}">
                <small id="name" class="form-text text-muted">Please type your new name.</small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{$teachers->email}}">
                <small id="email" class="form-text text-muted">Please type your new name.</small>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" value="{{$teachers->phone}}">
                <small id="phone" class="form-text text-muted">Please type your new name.</small>
              </div>
              <div class="form-group">
                <label for="address">address</label>
                <input type="text" name="address" class="form-control" id="address" value="{{$teachers->address}}">
                <small id="address" class="form-text text-muted">Please type your new name.</small>
              </div>
              <button type="submit" class="btn btn-success">Update</button>
              <a href="{{url('teachers')}}" class="btn btn-outline-danger">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection