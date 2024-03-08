<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <div class="card mb-3 banner container" style="background-image:url('image/gudang.jpg');height: 18rem;">
    {{-- <img src="{{ asset('image/gudang.jpg' ) }}" class="card-img-top" alt="..."> --}}
    <div class="card-body">
      <h5 class="text-white card-title">Selamat Datang</h5>
      <p class="text-white card-text">Adalah tempat stock barang barang termurah dan berkualitas</p>
      <p class="text-white card-text"><small class="text-body-secondary">By Rizky Wijaya</small></p>
    </div>
        <a a href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
  </div>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>