@extends('admin.layout')
@section('conten')
<h1> Supplier</h1>
<hr>
<form class action="/updatesupplier" method="post" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf
  <div>
    <label for="nama" class="form-label">Nama Supplier</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama supplier" value="{{old('nama')}}">
    <div style=color:red>
      @error('nama')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="nomor" class="form-label">No. Whatsapp</label>
    <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Masukan No. Whatsapp" value="{{old('nomor')}}">
    <div style=color:red>
      @error('nomor')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="alamat" class="form-label">Alamat Perusahaan</label>
    <textarea name="alamat" class="form-control" id="alamat" name="alamat" cols="30" rows="10" value="{{old('alamat')}}"></textarea>
    <div style=color:red>
      @error('alamat')
          {{$message}}
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection