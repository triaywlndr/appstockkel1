@extends('admin.layout')
@section('conten')
    <div class="container">
        <div class="card-body">
            <h1 class="card-title">Data Barang Keluar</h1>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Faktur</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Jumlah Keluar</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bkeluar as $bk)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$bk->tglf }}</td>
                    <td>{{$bk->stock_stock }}</td>
                    <td>{{$bk->supplier_id }}</td>
                    <td>{{$bk->mharga }}</td>
                    <td>{{$bk->mjumlah }}</td>
                    <td>{{$bk->kota }}</td>
                    <td>{{$bk->tgld}}</td>
                    <td><a href="/editbkeluar/{{$bk->id}}" class="btn btn-success">Edit</a></td>
                    <td><a href="/deletew/{{$bk->id}}" class="btn btn-danger">Delete</a></td>
                </tr>   
                </tr>   
                @endforeach
            </tbody>
        </table>
        <hr>
        <a href="/tambahbkeluar" class="btn btn-primary">Tambah barang keluar</a>
    </div>
    </div>
    </div>
@endsection