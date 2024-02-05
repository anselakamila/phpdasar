<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">      <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
<body>

  @include('includes.navbar')


    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"></a>
          <img src="img/logo.png" alt="" width="60" height="60">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-o">
              <li class="nav-item">
                <a class="nav-link" href="#beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galeri">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#berita">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-warning" href="#berita">Juan niskala</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn btn-outine-primary" type="submit">Masuk</button>
            </form>
          </div>
        </div>
      </nav> --}}


    {{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/background.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/background.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/background.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> --}}
      {{-- <div class="container-fluid"> --}}
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/background1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4 text-uppercase fw-bold">PTSP Pasar Rebo Jakarta Timur</h1>
              <h3 class="lead">Website Konsultasi dan Informasi pelayanan perizinan dan non perizinan  pada UP PTSP kecamatan Pasar Rebo yang memberikan Informasi dan melayani Konsultasi secara online</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/background1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4 text-uppercase fw-bold">PTSP Pasar Rebo Jakarta Timur</h1>
              <h3 class="lead">Website Konsultasi dan Informasi pelayanan perizinan dan non perizinan  pada UP PTSP kecamatan Pasar Rebo yang memberikan Informasi dan melayani Konsultasi secara online</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/background1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4 text-uppercase fw-bold">PTSP Pasar Rebo Jakarta Timur</h1>
              <h3 class="lead">Website Konsultasi dan Informasi pelayanan perizinan dan non perizinan  pada UP PTSP kecamatan Pasar Rebo yang memberikan Informasi dan melayani Konsultasi secara online</h3>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- </div> --}}
      
      
      
      

        
     <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="text-uppercase fw-bold fw-light">konsultasi</h1>
           
          </div>
        </div>
      </section>
      
       <section id="tentang" class="py-5">
            <div class="container my-4">
              <div class="row gx-lg-5">
                <div class="col-lg-5 mb-5">
                  <img src="img/about.png"  class="img-fluid">
                </div>
    
                <div class="col-lg-6">
                  <h1>Atur jadwal Konsultasi secara Online</h1>
                    <p class="text-muted fw-light lh-lg my-4 decs-tnt">Anda dapat menyesuaikan waktu maupun jenis platform yang anda inginkan untuk mengatur jadwal konsultasi secara online</p>
                    <button class="btn btn-primary " href="/jadwal.blade.php" type="submit">Atur jadwal konsultasi online</button>
      
      
                  </div>
                  </div>
                  </div>
       </section>

            
     <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="text-uppercase fw-bold fw-light">Frequntly Asked Questions</h1>
           
          </div>
        </div>
      </section>

      <section id="VhpQna" class="vhp-qna">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    {{-- <h2 class="heading-section text-center txt-add">
                        Pertanyaan seputar
                        <span class="text-qw-primary">Layanan Web Hosting</span>
                        Qwords
                    </h2> --}}
                </div>
            </div>
            <div class="row mt-3 mt-lg-5">
                <div class="col-12">
                    <div class="accordion" id="FAQ">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    type="button" data-bs-target="#collapse1" aria-expanded="false"
                                    aria-controls="collapse1">
                                    Bagaimana cara mengatur jadwal konsultasi online melalui website ini?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="collapse1"
                                aria-labelledby="heading1" data-bs-parent="#FAQ">
                                <div class="accordion-body">
                                    <p>
                                      Anda dapat ke halaman konsultasi (link), lalu klik tombol atur jadwal konsultasi online, kemudian isilah data data yang tersedia di website ini untuk mengatur jadwal anda.
                                       Namun sebelum itu anda harus daftar akun terlebih dahulu

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    type="button" data-bs-target="#collapse2" aria-expanded="false"
                                    aria-controls="collapse2">
                                    Dimana saya dapat melakukan perizinan online?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2"
                                data-bs-parent="#FAQ">
                                <div class="accordion-body">
                                    <p>
                                      Anda dapat melakukan perizinan secara online melalui Jakevo atau OSS dengan link yang tersedia di halaman perizinan kami.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    type="button" data-bs-target="#collapse3" aria-expanded="false"
                                    aria-controls="collapse3">
                                    Apa saja persyaratan perizinan dan non perizinan?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3"
                                data-bs-parent="#FAQ">
                                <div class="accordion-body">
                                    <p>
                                      Anda dapat mengakses link berikut (https://oss.go.id/panduan)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    type="button" data-bs-target="#collapse4" aria-expanded="false"
                                    aria-controls="collapse4">
                                    Bagaimana proses perizinan dan non perizinan?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4"
                                data-bs-parent="#FAQ">
                                <div class="accordion-body">
                                    <p>
                                      Jika anda menggunakan OSS silahkan menuju link berikut (https://oss.go.id/video) dan jika anda menggunakan Jakevo silahkan menuju link berikut (https://www.youtube.com/watch?v=pRqPdHg4L0Q)
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    type="button" data-bs-target="#collapse5" aria-expanded="false"
                                    aria-controls="collapse5">
                                    Saya memiliki pertanya yang belum terjawab di website ini?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5"
                                data-bs-parent="#FAQ">
                                <div class="accordion-body">
                                    <p>
                                      Anda dapat mengunjungi link berikut https://oss.go.id/informasi/faq
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion-item">
                            <h3 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    type="button" data-bs-target="#collapse6" aria-expanded="false"
                                    aria-controls="collapse6">
                                    Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6"
                                data-bs-parent="#FAQ">
                                <div class="accordion-body">
                                    <p>
                                        Ya, Anda bisa melakukan transfer Hosting dari provider lain ke Qwords Cloud Hosting Indonesia. Caranya, silahkan lakukan pemesanan Cloud Hosting baru sesuai paket yang Anda inginkan, kemudian informasikan kebutuhan migrasi pada tim support kami, lalu proses migrasi akan dibantu hingga selesai.
                                    </p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="" style="background-color: #ff6d0b">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row my-4">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
  
            <div class="rounded-circle shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
              <img src="img/logo1.png" height="160" alt=""
                   loading="lazy" />
            </div>


            {{-- <h4 class="text-uppercase mb-4 text-center text-white">PTSP Pasar Rebo</h4>
            <p class="text-center text-white">Jl. Raya Jakarta-Bogor No.KM 72, RT.1/RW.4, Pekayon, Kec. Ps. Rebo,Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13710</p> --}}
  
            {{-- <ul class="list-unstyled d-flex flex-row justify-content-center">
              <li>
                <a class="text-white px-2" href="#!">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li>
                <a class="text-white px-2" href="#!">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a class="text-white ps-2" href="#!">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul> --}}
  
          </div>
          
  
          {{-- <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Animals</h5>
  
            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="#!" class="text-white">When your pet is missing</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Recently found</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>How to adopt?</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pets for adoption</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Material gifts</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Help with walks</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Volunteer activities</a>
              </li>
            </ul>
          </div>
          
  
          
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Animals</h5>
  
            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>General information</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>About the shelter</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Statistic data</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Job</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Tenders</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Contact</a>
              </li>
            </ul>
          </div>
          
  
          
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Contact</h5>
  
            <ul class="list-unstyled">
              <li>
                <p><i class="fas fa-map-marker-alt pe-2"></i>Warsaw, 57 Street, Poland</p>
              </li>
              <li>
                <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
              </li>
              <li>
                <p><i class="fas fa-envelope pe-2 mb-0"></i>contact@example.com</p>
              </li>
            </ul>
          </div>
         
        </div>
      
      </div> --}}

      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase mb-4" style="letter-spacing: 2px; color: #ffffff;">Contact Us</h5>
        <ul class="list-unstyled mb-0">
          <li class="mb-1">
            <a style="color: #ffffff;">Telepon: +62 895 1631 4665</a>
          </li>
          <li class="mb-1">
            <a style="color: #ffffff;">Email: ptsp.psrrebo@gmail.com</a>
          </li>
  
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="mb-3" style="letter-spacing: 2px; color: #ffffff;">Site Map</h5>
        <ul class="list-unstyled mb-0">
          <li class="mb-1">
            <a style="color: #ffffff;">Beranda</a>
          </li>
          <li class="mb-1">
            <a style="color: #ffffff;">Konsultasi</a>
          </li>
          <li class="mb-1">
            <a style="color: #ffffff;">Perizinan</a>
          </li>
          <li class="mb-1">
            <a style="color: #ffffff;">FAQ</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="mb-3" style="letter-spacing: 2px; color: #ffffff;">Lokasi</h5>
        <ul class="list-unstyled mb-0">
          <li class="mb-1">
            <a style="color: #ffffff;">Alamat: Jl. Rw. Binong, RT.3/RW.10, Lubang Buaya, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13810</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   
  </div>
      
  
      <!-- Copyright -->
      {{-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright --> --}}
    </footer>
  
    
    

    

      

      

      

     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>