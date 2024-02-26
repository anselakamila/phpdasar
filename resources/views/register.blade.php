<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

  <section class="vh-100" style="background-color: #f89b0f;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="img/login.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form>
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <img src="img/logo.png" alt="" width="90" height="90">
                      {{-- <span class="h1 fw-bold mb-0">Logo</span> --}}
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">First name</label>
                          </div>
                        </div>
  
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="form3Example2" class="form-control" />
                              <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                          </div>
                        </div>

                         <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <!-- Checkbox -->
                {{-- <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div>
   --}}
                  <!-- Submit button -->
                  {{-- <button type="submit" class="btn btn-primary btn-block mb-4">
                    Sign up
                  </button> --}}
  
                    <div class="pt-1 mb-4">
                        <button class="btn btn-warning btn-lg btn-block" style="background-color: #f89b0f;" type="button"  >Register</button>
                    </div>
  
                    {{-- <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                        style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a> --}}
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>