<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- mycss -->
    <style>
    .login,
    .image {
      min-height: 100vh;
    }

    .bg-image {
      background-image: url('https://i.imgur.com/IRZI3Kx.jpg');
      background-size: cover;
      background-position: center center;
    }
    </style>

    <title>Login</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>

        <!-- The content half -->
        <div class="col-md-6 bg-light">
          <div class="login d-flex align-items-center py-5">
            <!-- Demo content-->
            <div class="container">
              <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto">
                  <h3 class="display-4">Login</h3>
                  <p class="text-muted">Silahkan masukkan Username dan Password anda!</p>
                  <!-- Membuat form untuk fungsi login pada controller login -->
                  <form action="<?= site_url('login/login') ?>" method="post">
                    <div class="form-group mb-3">
                      <input type="text" name="username" placeholder="Username" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" required>
                    </div>
                    <div class="form-group mb-3">
                      <input type="password" name="password" placeholder="Password" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" required>
                    </div>
                    <div class="row px-3 mb-4">
                      <!-- Link untuk kembali ke page registrasi -->
                      <a href="<?= site_url('registrasi') ?>" class="ml-auto mb-0 text-sm">Belum Punya Akun? Daftar dulu!</a>
                      <!-- Link untuk kembali ke page landing -->
                      <a href="<?= site_url() ?>" class="ml-auto mb-0 text-sm">Kembali ke Landing Page</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Login</button>
                    <div class="text-center d-flex justify-content-between mt-4"></div>
                  </form>
                </div>
              </div>
            </div>
            <!-- End -->
          </div>
        </div>
        <!-- End -->
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
