@extends('admin.layout')
@section('conten')

<h1>Riwayat Barang Keluar</h1>
<hr>
<form action="/savebkeluar" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <label for="Tanggal Faktur" class="form-label">Tanggal Faktur</label>
    <input type="date" class="form-control" id="nomor" name="ktglf" placeholder="Masukan tanggal" value="{{old('tanggalfaktur')}}">
    <div style=color:red>
      @error('Tanggal Faktur')
          {{$message}}
      @enderror
    </div>
  </div>
    <div>
        <label for="Barang keluar" class="form-label">Supplier</label>
        <input type="text" class="form-control" id="stock_id" name="stock_id" placeholder="stock_id" value="{{old('stock_id')}}">
        <div style=color:red>
          @error('stock_id')
              {{$message}}
          @enderror
        </div>
    </div>
    <div>
        <label for="jumlah" class="form-label">Jumlah Masuk</label>
        <input type="text" class="form-control" id="jumlah" name="kjumlah" placeholder="jumlah" value="{{old('jumlahkeluar')}}">
        <div style=color:red>
          @error('jumlahkeluar')
              {{$message}}
          @enderror
        </div>
    </div>
    <div>
        <label for="Nama pelanggan" class="form-label">Nama pelanggan</label>
        <input type="text" class="form-control" id="pelanggan_id" name="pelanggan_id" placeholder="tanggal" value="{{old('tanggaldibuat')}}">
        <div style=color:red>
          @error('Nama Pelanggan')
              {{$message}}
          @enderror
        </div>
        <div>
        <label for="Metode pembayaran" class="form-label">Metode pembayaran</label>
        <input type="text" class="form-control" id="Metode pembayaran" name="pembayaran" placeholder="Metode pembayaran" value="{{old('Metode pembayaran')}}">
        <div style=color:red>
          @error('Metode pembayaran')
              {{$message}}
          @enderror
        </div>
    </div>
      <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection