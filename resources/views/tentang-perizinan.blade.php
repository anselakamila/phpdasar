<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* .container {
          position: relative;
          width: 50%;
          
        } */
        
        /* .image {
          display: block;
          width: 100%;
          height: auto;
          filter: brightness(50%);
          
          
          
        }

        .card{
          border-radius: 20px;
          box-shadow: 2px 2px 2px rgba(219, 218, 218, 0.8);

        }

        .btn .btn-warning{
          background-color: #ff6d0b; 
        } */

        
        
        
        /* .overlay {
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          height: 100%;
          width: 100%;
          opacity: 0;
          transition: .5s ease;
          background-color: #008CBA;
        }
        
        .container:hover .overlay {
          opacity: 1;
        } */
        
        /* .text {
          color: white;
          font-size: 20px;
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          text-align: center;
        } */
        </style>
</head>
<body>

    
      @include('includes.navbar')

      {{-- <h2>Fade in Overlay</h2>
<p>Hover over the image to see the effect.</p>

<div class="container">
  <img src="img/jakevo1.png" alt="Avatar" class="image" >
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div> --}}

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="text-uppercase fw-bold fw-light">Tutorial Perizinan</h1>
      {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eligendi.</p> --}}

  
     
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">JEKEVO</h3>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="https://www.youtube.com/watch?v=_KXvwRyNO5Y" class="btn btn-warning text-light " style="background-color: #f67823">More Info</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">OSS</h3>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="https://oss.go.id/informasi/faq?search=&kategori=62e01363d4c14c2600ff6c37" class="btn btn-warning text-light" style="background-color: #f67823">More Info</a>
        </div>
      </div>
    </div>
  </div>


  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="text-uppercase fw-bold fw-light">Persyaratan Perizinan</h1>
        {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eligendi.</p> --}}
  
    
       
      </div>
    </div>
  
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">JEKEVO</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="https://oss.go.id/informasi/persyaratan-dasar?tab=kesesuaian-ruang&page=1" class="btn btn-warning text-light" style="background-color: #f67823">More Info</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">OSS</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="https://oss.go.id/informasi/persyaratan-dasar?tab=kesesuaian-ruang&page=1" class="btn btn-warning text-light" style="background-color: #f67823">More Info</a>
          </div>
        </div>
      </div>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>