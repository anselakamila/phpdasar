{{-- @section('content') --}}
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Template Main CSS File -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <img src="img/logo.png" alt="" width="60" height="60">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-o">
          <li class="nav-item">
            <a class="nav-link" href="/welcome">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu layanan" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/tentang">Tentang PTSP</a></li>
              <li><a class="dropdown-item" href="/visi">Visi Misi</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu layanan" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/standar">Standar Pelayanan</a></li>
              <li><a class="dropdown-item" href="/tentangperizinan">Tentang Perizinan</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/galeri">Galeri</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#berita">Berita</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link text-warning" href="/berita">Juan niskala</a>
          </li>
        </ul>
        {{-- <form class="d-flex">
          <button class="btn btn-outine-primary" type="submit">Masuk</button>
        </form> --}}
      </div>
    </div>
  </nav>
</body>
</html>

{{-- @endsection --}}