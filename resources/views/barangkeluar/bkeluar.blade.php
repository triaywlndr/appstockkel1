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
                    <th scope="col">Jumlah Masuk</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Cabang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bkeluar as $bm)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$bm->tglf }}</td>
                    <td>{{$bm->stock_stock }}</td>
                    <td>{{$bm->supplier_id }}</td>
                    <td>{{$bm->mharga }}</td>
                    <td>{{$bm->mjumlah }}</td>
                    <td>{{$bm->kota }}</td>
                    <td>{{$bm->tgld}}</td>
                    <td><a href="/editbkeluar/{{$bm->id}}" class="btn btn-success">Edit</a></td>
                    <td><a href="/deletew/{{$bm->id}}" class="btn btn-danger">Delete</a></td>
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