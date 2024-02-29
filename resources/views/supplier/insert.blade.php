@extends('admin.layout')
@section('conten')
<h1>Tambah Supplier</h1>
<hr>
<form method="post"> action="/savesupplier" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="NamaSupplier" class="form-label">Nama Supplier</label>
    <input type="text" class="form-control" id="NamaSupplier"> placeholder="Masukan Nama supplier">
  </div>
  <div class="mb-3">
    <label for="No" class="form-label">No. Whatsapp</label>
    <input type="text" class="form-control" id="No"> placeholder="Masukan No. Whatsapp">
  </div>
  <div class="mb-3">
    <label for="AlamatPerusahaan" class="form-label">Alamat Perusahaan</label>
    <textarea name="AlamatPerusahaan" class="form-control" id="AlamatPerusahaan" cols="30" rows="10"> placeholder="Masukan Alamat Perusahaan"       
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection