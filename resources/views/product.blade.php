@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Daftar Karya Mahasiswa
                 <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                </li>
            </ul>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Karya</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Baju Kemeja</td>
                    <td>Karya ini saya buat dengan kain kafan</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
              
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
