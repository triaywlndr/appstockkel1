@extends('admin.layout')
@section('conten')
<h1>Tambah Stock</h1>
<hr>
<form action="/savestock" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <label for="kode" class="form-label">Kode Barang</label>
    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode Barang" value="{{old('kode')}}">
    <div style=color:red>
      @error('kode')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="namab" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="namab" name="namab" placeholder="Masukan Nama Barang" value="{{old('namab')}}">
    <div style=color:red>
      @error('namab')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="harga" class="form-label">Jumlah Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga" value="{{old('harga')}}">
    <div style=color:red>
      @error('harga')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="stock" class="form-label">Jumlah Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukan Jumlah Stock" value="{{old('stock')}}">
    <div style=color:red>
      @error('namab')
          {{$message}}
      @enderror
    </div>
  </div>
      <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection