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
                </tr>   
                </tr>   
                @endforeach
            </tbody>
        </table>

        <h1 class="card-title">Data Barang Keluar</h1>
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
                    <td>{{$bk->stock->namab }}</td>
                    <td>{{$bk->kjumlah }}</td>
                    <td>{{$bk->subtotal }}</td>
                    <td>{{$bk->pelanggan->namap }}</td>
                    <td>{{$bk->pembayaran }}</td>
                </tr>   
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
@endsection