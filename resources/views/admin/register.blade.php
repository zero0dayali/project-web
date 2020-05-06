@extends('layouts.mainAdmin')
@section('title','registrasi')

@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
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
                     <th>User Type</th>
                      <th class="text-center">
                        action
                      </th>
                    </thead>
                    <tbody >
                      @foreach ($users as $row)
                          
                      <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->usertype}}</td>
                        <td class="text-center">
                          <a href="/role-edit/{{$row->id}}" class="btn btn-outline-primary" >edit</a>
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
          {{-- <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th class="text-right">Salary</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dakota Rice</td>
                        <td>Dakota Rice</td>
                        <td class="text-right">Dakota Rice</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> --}}
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