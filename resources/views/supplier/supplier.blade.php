@extends('admin.layout')
@section('conten')
    <div class="container">
        <div class="card-body">
            <h1 class="card-title">Data Supplier</h1>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">No. Whatsapp</th>
                    <th scope="col">Alamat Perusahaan</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supplier as $supp)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$supp->nama }}</td>
                    <td>{{$supp->nomor }}</td>
                    <td>{{$supp->alamat }}</td>
                    <td><a href="/editsupplier/{{$supp->id}}" class="btn btn-success">Edit</a></td>
                    <td><a href="/deletet/{{$supp->id}}" class="btn btn-danger">Delete</a></td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        <hr>
        <a href="/tambahsupplier" class="btn btn-primary">Tambah Supplier</a>
    </div>
    </div>
    </div>
@endsection
