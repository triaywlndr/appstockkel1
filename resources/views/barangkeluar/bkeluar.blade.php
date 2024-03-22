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
                    <th scope="col">Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Pelanggan</th>
                    <th scope="col">Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bkeluar as $bk)
                 <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$bk->ktglf}}</td>
                    <td>{{$bk->stock_id }}</td>
                    <td>{{$bk->kjumlah }}</td>
                    <td>{{$bk->pelanggan_id }}</td>
                    <td>{{$bk->pembayaran }}</td>
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