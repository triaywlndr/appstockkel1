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
                    <th scope="col">Nama</th>
                    <th scope="col">No. Whatsapp</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $plggn)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$plggn->namap }}</td>
                    <td>{{$plggn->no }}</td>
                    <td>{{$plggn->jenisk }}</td>
                    <td>{{$plggn->alamatt }}</td>
                    <td>{{$plggn->kota }}</td>
                    <td>{{$plggn->provinsi }}</td>
                    <td><a href="/editpelanggan/{{$plggn->id}}" class="btn btn-success">Edit</a></td>
                    <td><a href="/deletet/{{$plggn->id}}" class="btn btn-danger">Delete</a></td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        <hr>
        <a href="/tambahpelanggan" class="btn btn-primary">Tambah Pelanggan</a>
    </div>
    </div>
    </div>
@endsection
