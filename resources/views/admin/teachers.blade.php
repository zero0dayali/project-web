@extends('layouts.mainAdmin')
@section('title','Teachers')

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/save-teachers" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nik" class="col-form-label">Nik</label>
              <input type="text" class="form-control" id="nik" name="nik">
            </div>
            <div class="form-group">
                <label for="name" class="col-form-label">name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email" class="col-form-label">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone" class="col-form-label">phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
            <div class="form-group">
              <label for="address" class="col-form-label">Address</label>
              <textarea class="form-control" id="address" name="address"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Guru
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >tambah</button>
                </h4>
              </div>
              <div class="card-body">
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                     <th>Nama</th>
                     <th>Phone</th>
                     <th>Email</th>
                     <th>Alamat</th>
                      <th class="text-center">
                        action
                      </th>
                    </thead>
                    <tbody >
                      @foreach ($teachers as $row)
                          
                      <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->address}}</td>
                        <td class="text-center">
                          <a href="{{url('teachers/'.$row->id)}}" class="btn btn-outline-primary" >edit</a>
                          <a href="/role-delete/{{$row->id}}" class="btn btn-danger" >delete</a>
                        </td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
@endsection