<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- mycss -->
    <link rel="stylesheet" href="register.css" />

    <!-- javascript -->
    <script src="register.js"></script>

    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
          <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block" />
          <h1>Registrasi</h1>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
          <!-- Membuat form untuk fungsi registrasi pada controller registrasi -->
          <form action="<?= site_url('registrasi/registrasi') ?>" method="post">
            <div class="row">
              <!-- Nama Lengkap -->
              <div class="input-group col-lg-12 mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fa fa-envelope text-muted"></i>
                  </span>
                </div>
                <input type="text" name="namaUser" placeholder="Nama Lengkap" class="form-control bg-white border-left-0 border-md" required/>
              </div>
			  
			  <!-- Phone Number -->
              <div class="input-group col-lg-12 mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fa fa-phone-square text-muted"></i>
                  </span>
                </div>
                <input type="tel" name="noHP" placeholder="Nomor HP" class="form-control bg-white border-md border-left-0 pl-3" required/>
              </div>

              <!-- Email Address -->
              <div class="input-group col-lg-12 mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fa fa-envelope text-muted"></i>
                  </span>
                </div>
                <input type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required/>
              </div>
			  
			  <!-- Alamat -->
              <div class="input-group col-lg-12 mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fa fa-envelope text-muted"></i>
                  </span>
                </div>
                <input type="text" name="alamat" placeholder="Alamat" class="form-control bg-white border-left-0 border-md" required/>
              </div>

              <!-- Username -->
              <div class="input-group col-lg-6 mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fa fa-lock text-muted"></i>
                  </span>
                </div>
                <input type="text" name="usernameKonsumen" placeholder="Username" class="form-control bg-white border-left-0 border-md" required/>
              </div>

              <!-- Password -->
              <div class="input-group col-lg-6 mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fa fa-lock text-muted"></i>
                  </span>
                </div>
                <input type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required/>
              </div>

              <!-- Submit Button -->
              <div class="form-group col-lg-12 mx-auto mb-0">
              <button type="submit" class="btn btn-primary btn-block py-2 font-weight-bold">Buat Akun</button>
              </div>

              <!-- Divider Text -->
              <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                <div class="border-bottom w-100 ml-5"></div>
                <span class="px-2 small text-muted font-weight-bold text-muted"></span>
                <div class="border-bottom w-100 mr-5"></div>
              </div>

              <!-- Already Registered -->
              <div class="text-center w-100">
                <!-- Klik link ini untuk user yang sudah punya akun, dan akan di redirect ke halaman login  -->
                <p class="text-muted font-weight-bold">Sudah Punya Akun? <a href="<?= site_url('login') ?>" class="text-primary ml-2">Login</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
