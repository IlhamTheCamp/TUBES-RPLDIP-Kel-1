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
    <!-- <link href="/assets/css/homepage.css" rel="stylesheet" > -->
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
        height: 800px;
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
          height: 1000px;
        }
        .jumbotron .display-4 {
          font-size: 62px;
        }

        .jumbotron .lead {
          font-size: 50px;
        }
        /*Team*/
        #our-team {
          padding: 100px 0;
          background: #ececec;
        }
        #our-team .team-member {
          padding: 10px;
          border: 2px solid #ffffff;
          background: #ffb74d;
        }
        #our-team .team-member .team-img {
          margin: -15px -10px 0 -10px;
        }
        #our-team .team-member .team-info {
          /* padding-bottom: 10px; */
          text-align: center;
        }
        #our-team .team-member:hover .social-icons > li > a {
          background: #45aed6;
        }
        #our-team .team-member:hover .social-icons {
          height: 35px;
        }
        #our-team .social-icons {
          list-style: none;
          padding: 0;
          margin: 0;
          height: 0px;
          overflow: hidden;
          -webkit-transition: height 1s; /* For Safari 3.1 to 6.0 */
          transition: height 1s;
        }
        #our-team .social-icons > li {
          display: inline-block;
        }
        #our-team .social-icons > li > a {
          display: block;
          width: 32px;
          height: 32px;
          line-height: 32px;
          text-align: center;
          color: #fff;
          background: #222534;
          border-radius: 3px;
        }
      }

    </style>

    <title>Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url();?>assets/css/styleHomepage.css">Rental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="<?= site_url()?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?= site_url('login') ?>" >Customer</a>
            <a class="nav-link" href="<?= site_url('admin') ?>">Admin</a>
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
            <img class="img-responsive" src="https://i.imgur.com/dYxpwaK.png"/>
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
                <img class="img-responsive" src="" alt="" />
              </div>
              <div class="team-info">
                <h3>Ilham Rizki Hidayat</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
              <div class="team-img">
                <img class="img-responsive" src="homepage/img/02.jpg" alt="" />
              </div>
              <div class="team-info">
                <h3>MMeyzo Naufal Romzi</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
              <div class="team-img">
                <img class="img-responsive" src="homepage/img/03.jpg" alt="" />
              </div>
              <div class="team-info">
                <h3>Rachmat Dwi Putra</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
              <div class="team-img">
                <img class="img-responsive" src="homepage/img/04.jpg" alt="" />
              </div>
              <div class="team-info">
                <h3>Djafar Shiddieq Ritonga</h3>
                <h3>Arrhenius Mrandal</h3>
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
