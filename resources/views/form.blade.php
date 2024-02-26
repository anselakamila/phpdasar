<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
   
</head>
<body id="form">

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="text-uppercase fw-bold fw-light">Atur Jadwal Konsultasi</h1>
        <p>Isilah seluruh data dibawah ini untuk mengatur jadwal konsultasi anda</p>

    
       
      </div>
    </div>
     </section>
    

      <div class="container">
        <form action="action_page.php">
      
          <label for="fname">Nama lengkap</label>
          <input type="text" id="fname" name="firstname" placeholder="Nama lengkap..">
      
          <label for="lname">Email</label>
          <input type="text" id="lname" name="lastname" placeholder="Email..">

          <label for="lname">No Whatsapp</label>
          <input type="text" id="lname" name="lastname" placeholder="No Whatsapp..">

          <label for="lname">Alamat</label>
          <input type="text" id="lname" name="lastname" placeholder="Alamat..">

          <label for="lname">Kelurahan</label>
          <input type="text" id="lname" name="lastname" placeholder="Kelurahan..">

          <label for="lname">Tanggal konsultasi</label>
          <input type="text" id="lname" name="lastname" placeholder="Tanggal konsultasi..">

          <label for="lname">Waktu konsultasi</label>
          <input type="text" id="lname" name="lastname" placeholder="Waktu konsultasi..">

          <label for="lname">Jenis konsultasi</label>
          <input type="text" id="lname" name="lastname" placeholder="Jenis konsultasi..">
          
      
          {{-- <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>

          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>

          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>

          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select> --}}
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>