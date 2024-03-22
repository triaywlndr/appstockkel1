@extends('admin.layout')
@section('conten')
    <div class="container">
        <div class="card-body">
            <h1 class="card-title">Data Barang Masuk</h1>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Faktur</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Jumlah Masuk</th>
                    <th scope="col">Tanggal Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bmasuk as $bm)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$bm->tglf }}</td>
                    <td>{{$bm->stock->namab }}</td>
                    <td>{{$bm->supplier->nama }}</td>
                    <td>{{$bm->mharga }}</td>
                    <td>{{$bm->mjumlah }}</td>
                    <td>{{$bm->tgld}}</td>
                    <td></td>
                    <td><a href="/editbmasuk/{{$bm->id}}" class="btn btn-success">Edit</a></td>
                    <td><a href="/deletep/{{$bm->id}}" class="btn btn-danger">Delete</a></td>
                </tr>   
                </tr>   
                @endforeach
            </tbody>
        </table>
        <hr>
        <a href="/tambahbmasuk" class="btn btn-primary">Tambah barang masuk</a>
    </div>
    </div>
    </div>
@endsection