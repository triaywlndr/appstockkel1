@extends('admin.layout')
@section('conten')
    <div class="container">
        <div class="card-body">
            <h6 class="card-title">Data Supplier</h6>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">No. Whatsapp</th>
                    <th scope="col">Alamat Perusahaan</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supplier as $sup)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$sup->nama }}</td>
                    <td>{{$sup->nomor }}</td>
                    <td>{{$sup->alamat }}</td>
                    <td><a href="/edit/{{$suppler->id}}" class="btn-btn-success">Edit</a></td>
                    <td><a href="/delete/{{$suppler->id}}" class="btn btn-danger">Delete</a></td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        <a href="/tambahsupplier" class="btn btn-primary">Tambah Supplier</a>
    </div>
    </div>
    </div>
@endsection
