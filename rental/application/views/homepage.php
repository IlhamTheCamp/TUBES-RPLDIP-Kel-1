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
    <link rel="stylesheet" href="<?php echo base_url('application/views/home/style.css'); ?>" />

    <title>Landing Page</title>
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
            <a class="nav-link" href="#services">Our Team</a>
            <a class="nav-link" href="#">about</a>
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Join us </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= site_url('admin') ?>">Admin</a>
                <a class="dropdown-item" href="#">Customer</a>
                <a class="dropdown-item" href="#">Register</a>
              </div>
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
      </div>
    </div>

    <!-- akhir jumbotron -->

    <!-- about -->

    <section id="about">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title text-center wow fadeInDown">About Us</h2>
          <p class="text-center wow fadeInDown">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br />
            semper aliquam quis mattis quam.
          </p>	
        </div>

        <div class="row">
          <div class="col-sm-6 wow fadeInLeft">
            <img class="img-responsive" src="<?php echo base_url('application/views/home/img/about.png'); ?>" alt="" />
          </div>

          <div class="col-sm-6 wow fadeInRight">
            <h3 class="column-title">We are Market Leader</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend
              ipsum.
            </p>

            <p>
              Nulla eu neque commodo, dapibus dolor eget, dictum arcu. In nec purus eu tellus consequat ultricies. Donec feugiat tempor turpis, rutrum sagittis mi venenatis at. Sed molestie lorem a blandit congue. Ut pellentesque odio quis
              leo volutpat, vitae vulputate felis condimentum.
            </p>

            <p>Praesent vulputate fermentum lorem, id rhoncus sem vehicula eu. Quisque ullamcorper, orci adipiscing auctor viverra, velit arcu malesuada metus, in volutpat tellus sem at justo.</p>

            <a class="btn btn-primary" href="#">Learn More</a>
          </div>
        </div>
      </div>
    </section>
    <!--/#about-->

    <!-- akhir about -->

    <section id="our-team">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title text-center wow fadeInDown">The Best Team</h2>
          <p class="text-center wow fadeInDown">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br />
            semper aliquam quis mattis quam.
          </p>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
              <div class="team-img">
                <img class="img-responsive" src="images/team/01.jpg" alt="" />
              </div>
              <div class="team-info">
                <h3>John Deo</h3>
                <span>CEO</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
              <div class="team-img">
                <img class="img-responsive" src="images/team/02.jpg" alt="" />
              </div>
              <div class="team-info">
                <h3>Mike Timobbs</h3>
                <span>Manager</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
              <div class="team-img">
                <img class="img-responsive" src="images/team/03.jpg" alt="" />
              </div>
              <div class="team-info">
                <h3>Remo Silvaus</h3>
                <span>Designer</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
              <div class="team-img">
                <img class="img-responsive" src="images/team/04.jpg" alt="" />
              </div>
              <div class="team-info">
                <h3>Niscal Deon</h3>
                <span>Engineer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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