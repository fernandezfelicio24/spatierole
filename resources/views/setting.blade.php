@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Daftar User
                
                </li>
            </ul>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama </th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $datauser)
                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$datauser->name}}</td>
                            <td>{{$datauser->email}}</td>
                            <td>user</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
          
              
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
