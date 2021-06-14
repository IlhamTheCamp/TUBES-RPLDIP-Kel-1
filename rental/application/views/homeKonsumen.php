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
        background-image: url(https://i.imgur.com/L0g6VIo.jpg);
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

    <title>Landing page</title>
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
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link">Selamat datang, <?php echo $_SESSION['username'] ?></a>
            <a class="nav-link" href="<?= site_url('home') ?>">Log Out</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->

    <!-- jumbtron -->

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Rental Kendaraan</h1>
        <p class="lead">
          "<span>Get</span> your <span>better</span> car <br />
          with <span>us</span>"
        </p>
        <button type="button" class="btn btn-warning"><a href="<?= site_url('kendaraan/pesanan') ?>">Pemesanan</a></button>
        <button type="button" class="btn btn-warning">Pembayaran</button>
      </div>
    </div>

    <!-- akhir jumbotron -->
  </body>
</html>
