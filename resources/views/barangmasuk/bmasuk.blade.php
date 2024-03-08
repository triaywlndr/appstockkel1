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
                @foreach ($bmasuks as $table)
                 <tr>
                    <th>:create('bmasuks', function (Blueprint $table)</th>
                    <td>$table->id();</td>
                    <td>$table->date('tgl');</td>
                    <td>$table->foreignId('stock_id');</td>
                    <td>$table->integer('harga');</td>
                    <td>$table->integer('jumlah');</td>
                    <td>$table->foreignId('supplier_id');</td>
                    <td>$table->timestamps();</td>
                    <td><a href="/editpelanggan/{{$plggn->id}}" class="btn btn-success">Edit</a></td>
                    <td><a href="/deletee/{{$plggn->id}}" class="btn btn-danger">Delete</a></td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        <hr>
        <a href="/tambahpelanggan" class="btn btn-primary">Tambah barang masuk</a>
    </div>
    </div>
    </div>
@endsection