@extends('admin.layout')
@section('conten')
<h1>Tambah Supplier</h1>
<hr>
<form class action="/savesupplier" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Supplier</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama supplier" value="{{old('nama')}}">
    <div style="color:red">
      @error('nama')
          {{$message}}
      @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="nomor" class="form-label">No. Whatsapp</label>
    <input type="text" class="form-control" id="nomor" placeholder="Masukan No. Whatsapp" value="{{old('nomor')}}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat Perusahaan</label>
    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" value="{{old('alamat')}}">
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection