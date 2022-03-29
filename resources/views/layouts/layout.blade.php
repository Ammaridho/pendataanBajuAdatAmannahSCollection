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
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="">Pendataan Barang Amanah'S Collection</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">M</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" id="homeUtama" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="inputData" href="#">Input Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="lihatData" href="#">Lihat Data</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div id="kontenUtama"></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="/js/jquery-3.6.0.min.js"></script>
  </body>

  <script>
    $( document ).ready(function () {
      $.get("{{ route('indexHome') }}",{},function (data) {
          $('#kontenUtama').html(data);
      })
    })

    // buka home Utama
    $('#homeUtama').on('click',function () {
      $.get("{{ route('indexHome') }}",{},function (data) {
          $('#kontenUtama').html(data);
      })
    })

    // buka Input Data
    $('#inputData').on('click',function () {
      $.get("{{ route('inputDataHome') }}",{},function (data) {
          $('#kontenUtama').html(data);
      })
    })
  </script>
</html>