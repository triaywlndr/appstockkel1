@extends('admin.layout')
@section('conten')

<h1>Edit Barang Masuk</h1>
<hr>
<form action="/updatebmasuk/{{$bmasuk->id}}" method="post" enctype="multipart/form-data">
  @method('PUT')
    @csrf
  <div>
    <label for="tglf" class="form-label">Tanggal Faktur</label>
    <input type="date" class="form-control" id="tglf" name="tglf" placeholder="Masukan tanggal" value="{{$bmasuk->tglf}}">
    <div style=color:red>
      @error('tglf')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="stock_id" class="form-label">Nama barang</label>
    <select id="stock_id" class="form-control" name="stock_id">
    @foreach ($stock as $stck)
    <option value="{{$stck->id}}">{{$stck->namab}}</option>
    @endforeach
    </select>
    <div style=color:red>
      @error('stock_id')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="supplier_id" class="form-label">Supplier</label>
    <select id="supplier_id" class="form-control" name="supplier_id">
      @foreach ($supplier as $spy)
        <option value="{{$spy->id}}">{{$spy->nama}}</option>
      @endforeach
    </select>
    <div style=color:red>
      @error('supplier_id')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="mharga" class="form-label">Harga Beli</label>
    <input type="text" class="form-control" id="mharga" name="mharga" placeholder="Harga Barang" value="{{$bmasuk->mharga}}">
    <div style=color:red>
      @error('mharga')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="mjumlah" class="form-label">Jumlah Masuk</label>
    <input type="text" class="form-control" id="mjumlah" name="mjumlah" placeholder="Jumlah Barang" value="{{$bmasuk->mjumlah}}">
    <div style=color:red>
          @error('mjumlah')
              {{$message}}
          @enderror
        </div>
  </div>
    <div>
        <label for="tgld" class="form-label">Tanggal Dibuat</label>
        <input type="date" class="form-control" id="tgld" name="tgld" placeholder="tgld" value="{{$bmasuk->tgld}}">
        <div style=color:red>
          @error('tgld')
              {{$message}}
          @enderror
        </div>
    </div>
      <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection