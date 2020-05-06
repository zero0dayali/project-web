@extends('layouts.mainAdmin')
@section('title','registrasi edit')

@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Edit Data</h4>
              </div>
              <div class="card-body">
              <form action="/role-register-update/{{ $users->id}}" method="post">
                  @csrf
                  @method('put')
                  <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="username" class="form-control" id="name" value="{{$users->name}}">
                    <small id="name" class="form-text text-muted">Please type your new name.</small>
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                      <select name="usertype" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="biasa">Biasa</option>
                         <option value="">None</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-success">Update</button>
                  <a href="/role-register" class="btn btn-outline-danger">Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection