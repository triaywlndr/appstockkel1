@extends('admin.layout')
@section('conten')
<h1>Tambah Pelanggan</h1>
<hr>
<form class action="/savepelanggan" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <label for="namap" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" id="namap" name="namap" placeholder="Masukan Nama supplier" value="{{old('namap')}}">
    <div style=color:red>
      @error('namap')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="no" class="form-label">No. Whatsapp</label>
    <input type="text" class="form-control" id="no" name="no" placeholder="Masukan No. Whatsapp" value="{{old('no')}}">
    <div style=color:red>
      @error('nomor')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="jenisk" class="form-label">Jenis Kelamin</label>
    <select id="jenisk" name="jenisk" class="form-control" value="{{old('jenisk')}}">
      <option value="">-- Pilih Kelamin --</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    <div style="color:red">
        @error('jenisk')
          {{$message}}
        @enderror
    </div>
    </div>
    <div>
        <label for="alamatt" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamatt" name="alamatt" placeholder="Alamat" value="{{old('alamatt')}}">
        <div style=color:red>
          @error('alamatt')
              {{$message}}
          @enderror
        </div>
      </div>
    <div>
        <label for="kota" class="form-label">Kota</label>
        <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="{{old('kota')}}">
        <div style=color:red>
          @error('kota')
              {{$message}}
          @enderror
        </div>
      </div>
    <div>
        <label for="provinsi" class="form-label">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="{{old('provinsi')}}">
        <div style=color:red>
          @error('provinsi')
              {{$message}}
          @enderror
        </div>
      </div>
      <hr>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection