<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <title>Pendataan Barang Amcol</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row sticky-top">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="">Pendataan Barang Amcol</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
              <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" id="homeUtama" href="#">Home</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" id="inputData" href="#">Input Data</a>
              </li> --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Input Data
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" id="TabAtasan" href="#">Atasan</a></li>
                  <li><a class="dropdown-item" id="TabBawahan" href="#">Bawahan</a></li>
                  <li><a class="dropdown-item" id="TabAksesoris" href="#">Aksesoris</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="lihatBaju" href="#">Lihat Baju</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="lihatTransaksi" href="#">Transaksi</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div id="kontenUtama"></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="/js/jquery-3.6.0.min.js"></script>
  </body>

  <script>
    // auto buka konten utama
    $( document ).ready(function () {
      $.get("{{ route('indexHome') }}",function (data) {
          $('#kontenUtama').html(data);
      })
    })

    // buka transaksi
    $('#lihatTransaksi').on('click',function () {
      $.get("{{ route('lihatTransaksi') }}",function (data) {
        $('#kontenUtama').html(data);
      })
    })

    // buka home Utama
    $('#homeUtama').on('click',function () {
      $.get("{{ route('indexHome') }}",function (data) {
          $('#kontenUtama').html(data);
      })
    })

    // buka Input Data
    $('.inputData').on('click',function () {
      $.get("{{ route('inputDataHome') }}",function (data) {
          $('#kontenUtama').html(data);
      })
    })

    // buka tab atasan
    $('#TabAtasan').on('click',function () {
      $.get("{{ route('tabAtasan') }}",function (data) {
          $('#kontenUtama').html(data);
      })
    })

    // buka tab bawahan
    $('#TabBawahan').on('click',function () {
        $.get("{{ route('tabBawahan') }}",function (data) {
            $('#kontenUtama').html(data);
        })
    })

    // buka tab aksesoris
    $('#TabAksesoris').on('click',function () {
        $.get("{{ route('tabAksesoris') }}",function (data) {
            $('#kontenUtama').html(data);
        })
    })

    // lihat Baju
    $('#lihatBaju').on('click',function () {
      $.get("{{ route('lihatBaju') }}",function (data) {
          $('#kontenUtama').html(data);
      })
    })
  </script>
</html>