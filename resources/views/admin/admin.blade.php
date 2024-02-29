@extends('admin.layout')
@section('conten')

<div class="container">
            <div class="card-body">
            <h6 class="card-title">Data Admin</h6>
            </div>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Cabang</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="col">Rizky</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="col">Edwar</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="col">Ayu</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>

@endsection