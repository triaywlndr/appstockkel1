@extends('admin.layout')
@section('conten')
    <div class="container">
        <div class="card-body">
            <h1 class="card-title">Data Stock</h1>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stock as $stck)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$stck->kode }}</td>
                    <td>{{$stck->namab }}</td>
                    <td>{{$stck->harga }}</td>
                    <td>{{$stck->stock }}</td>
                    <td>{{$stck->Supplier->nama }}</td>
                    <td><a href="/editstock/{{$stck->id}}" class="btn btn-success">Edit</a></td>
                    <td><a href="/delete/{{$stck->id}}" class="btn btn-danger">Delete</a></td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        <hr>
        <a href="/tambahstock" class="btn btn-primary">Tambah Supplier</a>
    </div>
    </div>
    </div>
@endsection
