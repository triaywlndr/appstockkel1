@extends('admin.layout')
@section('conten')

<h1>Riwayat Barang Masuk</h1>
<hr>
<form action="/savepelanggan" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <label for="nomor" class="form-label">Tanggal Faktur</label>
    <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Masukan tanggal" value="{{old('tanggalfaktur')}}">
    <div style=color:red>
      @error('nomor')
          {{$message}}
      @enderror
    </div>
  </div>

  <div>
    <label for="nama" class="form-label">Nama barang</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" value="{{old('nama')}}">
    <div style=color:red>
      @error('nama')
          {{$message}}
      @enderror
    </div>
  </div>

    <div>
        <label for="supplier" class="form-label">Supplier</label>
        <select name="supplier" class="form-control" id="supplier">
          @foreach ($supplier as $spy)
            <option value="{{ $spy->id }}">{{ $spy->nama }}</option>
          @endforeach
        </select>
        <div style=color:red>
          @error('supplier')
              {{$message}}
          @enderror
        </div>
    </div>

    <div>
        <label for="harga" class="form-label">Harga Beli</label>
        <input type="text" class="form-control" id="harga" name="harga" placeholder="harga" value="{{old('hargabeli')}}">
        <div style=color:red>
          @error('nomor')
              {{$message}}
          @enderror
        </div>
    </div>
    <div>
        <label for="jumlah" class="form-label">Jumlah Masuk</label>
        <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah" value="{{old('jumlahmasuk')}}">
        <div style=color:red>
          @error('jumlah')
              {{$message}}
          @enderror
        </div>
    </div>
    <div>
        <label for="tanggal" class="form-label">Tanggal Dibuat</label>
        <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" value="{{old('tanggaldibuat')}}">
        <div style=color:red>
          @error('tanggal')
              {{$message}}
          @enderror
        </div>
    </div>
      <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection