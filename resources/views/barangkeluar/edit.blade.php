@extends('admin.layout')
@section('conten')

<h1>Riwayat Barang Keluar</h1>
<hr>
<form action="/updatebkeluar{{$bkeluar->id}}" method="post" enctype="multipart/form-data">
  @method('PUT')
    @csrf
  <div>
    <label for="ktglf" class="form-label">Tanggal Faktur</label>
    <input type="date" class="form-control" id="nomor" name="ktglf" placeholder="Masukan tanggal" value="{{$bkeluar->ktglf}}">
    <div style=color:red>
      @error('Tanggal Faktur')
          {{$message}}
      @enderror
    </div>
  </div>
  <div>
    <label for="stock_id" class="form-label">Nama barang</label>
    <select id="stock_id" class="form-control" name="stock_id" value="{{$bkeluar->stock_id}}">
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
        <label for="kjumlah" class="form-label">Jumlah</label>
        <input type="text" class="form-control" id="kjumlah" name="kjumlah" placeholder="Jumlah" value="{{$bkeluar->kjumlah}}">
        <div style=color:red>
          @error('jumlahkeluar')
              {{$message}}
          @enderror
        </div>
    </div>
    <div>
      <label for="pelanggan_id" class="form-label">Nama Pelanggan</label>
      <select id="pelanggan_id" class="form-control" name="pelanggan_id" value="{{$bkeluar->pelanggan_id}}">
      @foreach ($pelanggan as $plg)
      <option value="{{$plg->id}}">{{$plg->namap}}</option>
      @endforeach
      </select>
      <div style=color:red>
        @error('stock_id')
            {{$message}}
        @enderror
      </div>
    </div>
        <div>
          <label for="pembayaran" class="form-label">Metode Pembayaran</label>
          <select id="pembayaran" name="pembayaran" class="form-control" value="{{$bkeluar->pembayaran}}">
            <option value="Cash">Cash</option>
            <option value="Kredit">Kredit</option>
          </select>
          <div style="color:red">
              @error('pembayaran')
                {{$message}}
              @enderror
              </div>
          </div>
      <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection