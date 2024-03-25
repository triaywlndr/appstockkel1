@extends('admin.layout')
@section('conten')
<h1>Update Stock</h1>
<hr>
<form action="/updatestock/{{$stock->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <div>
    <label for="kode" class="form-label">Kode Barang</label>
    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode Barang" value="{{$stock->kode}}">
    <div style=color:red>
      @error('kode')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="namab" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="namab" name="namab" placeholder="Masukan Nama Barang" value="{{$stock->namab}}">
    <div style=color:red>
      @error('namab')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="harga" class="form-label">Jumlah Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga" value="{{$stock->harga}}">
    <div style=color:red>
      @error('harga')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="stocka" class="form-label">Jumlah Stock</label>o
    <input type="text" class="form-control" id="stocka" name="stocka" placeholder="Masukan Jumlah Stock" value="{{$stock->stocka}}">
    <div style=color:red>
      @error('stock')
          {{$message}}
      @enderror
    </div>
  </div>
      <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection