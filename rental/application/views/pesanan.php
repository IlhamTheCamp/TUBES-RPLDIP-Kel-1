<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Pesanan</title>
</head>
<body>
    <h1>Selamat, berhasil masuk page Pesanan</h1>
    <h2>Username kamu <?php echo $_SESSION['username'] ?></h2>

    <p>Ini masih sementara, hanya untuk testing sequence login, IMK Pesanan masih dalam progress</p>

    <p>Daftar Kendaraan</p>
    <form action="<?= site_url('pesanan/addPesanan') ?>" method="post">
        <?php $index=1; foreach (array_reverse($kendaraan) as $k) { ?>
        <input type="radio" name="noPlat" id="<?= $k['noPlat'] ?>" value="<?= $k['noPlat'] ?>">
        <label for="<?= $k['noPlat'] ?>"><?= $k['noPlat'] ?> - <?= $k['merekKendaraan'] ?> - <?= $k['jenisKendaraan'] ?> - <?= $k['warnaKendaraan'] ?></label><br>
        <?php } ?>
        <br>
        <button type="submit">Sewa</button>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- my fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Viga&display=swap" rel="stylesheet" />

    <!-- mycss -->
    <style>
        .navbar {
    position: relative;
    z-index: 1;
  }
  .navbar-brand {
    font-family: 'viga';
    font-size: 32px;
  }
  
  /* jumbotron  */
  
  .jumbotron {
    background-image: url(img/tesla1.jpg);
    background-size: cover;
    height: 1;
    text-align: center;
    position: relative;
  }
  
  .jumbotron .container {
    z-index: 1;
    position: relative;
  }
  
  .jumbotron::after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
    position: absolute;
    bottom: 0;
  }
  
  .jumbotron .display-4 {
    color: white;
    font-weight: bolder;
    font-size: 40px;
    margin-top: 20px;
    text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.7);
  }
  
  .jumbotron .lead {
    font-family: 'Bebas Neue';
    font-size: 30px;
    color: white;
    text-align: center;
    margin-top: 25px;
    text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.7);
  }
  
  .jumbotron .lead span {
    font-weight: 500;
  }
  
  /* about */
  #about {
    padding: 100px 0;
  }
  
  /* Desktop version  */
  @media (min-width: 992px) {
    .navbar-brand,
    .nav-link {
      color: white !important;
      text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.7);
    }
    .nav-link {
      text-transform: uppercase;
      margin-left: 28px;
    }
  
    .nav-link:hover::after {
      content: '';
      display: block;
      border-bottom: 3px solid #7ad7f0;
      width: 50%;
      margin: auto;
      padding-bottom: 5px;
      margin-bottom: -8px;
    }
    .dropdown {
      text-transform: uppercase;
      margin-left: 28px;
    }
    .jumbotron {
      height: 600px;
    }
    .jumbotron .display-4 {
      font-size: 62px;
    }
  
    .jumbotron .lead {
      font-size: 50px;
    }
    
    </style>

    <title>Halaman Pemesanan</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Rental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="<?= site_url('homeKonsumen') ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?= site_url('home') ?>">Log Out</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->

    <!-- about -->
    <section id="projects">
      <div class="container">
        <div class="row ">
          <div class="col">
            <h2>Daftar Kendaraan</h2>
          </div>
        </div>
        <form action="<?= site_url('pesanan/addPesanan') ?>" method="post" class="form-inline text-center">
        <?php $index=1; foreach (array_reverse($kendaraan) as $k) { ?>
            <div class="col-sm-6 form-inline text-center">
                <div class="card">
                    <div class="card-group">
                        <div class="card-body">
                            <input type="radio" name="noPlat" id="<?= $k['noPlat'] ?>" value="<?= $k['noPlat'] ?>">
                            <h5 class="card-title text-center"><?= $k['merekKendaraan'] ?></h5>
                            <p class="card-text text-center">No Plat : <label for="<?= $k['noPlat'] ?>"><?= $k['noPlat'] ?></p></label>
                            <p class="card-text text-center">Jenis Kendaraan : <?= $k['jenisKendaraan'] ?></p>
                            <p class="card-text text-center">Warna Kendaraan : <?= $k['warnaKendaraan'] ?></p>
                            <p class="card-text text-center">Harga : <?= $k['biayaStandar'] ?></p>
                            <p class="card-text text-center">Durasi : <input type="text" name="durasi"></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col text-center">
            <button type="submit" class="btn btn-primary">Sewa</button>
        </div>
        </form>
    </section>
    

    <!--/#about-->

    <!-- akhir about -->

    <!--/#our-team-->


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
