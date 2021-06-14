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
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #fff;
            background-repeat: no-repeat;
            }

            .plus-minus {
            position: relative;
            }

            .plus {
            position: absolute;
            top: -4px;
            left: 2px;
            cursor: pointer;
            }

            .minus {
            position: absolute;
            top: 8px;
            left: 5px;
            cursor: pointer;
            }

            .vsm-text:hover {
            color: #ff5252;
            }

            .book,
            .book-img {
            width: 240px;
            height: 360px;
            border-radius: 5px;
            }

            .book {
            margin: 20px 15px 5px 15px;
            }

            .border-top {
            border-top: 1px solid #eeeeee !important;
            margin-top: 20px;
            padding-top: 15px;
            }

            .card {
            margin: 40px 0px;
            padding: 40px 50px;
            border-radius: 20px;
            border: none;
            box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
            }

            input,
            textarea {
            background-color: #f3e5f5;
            padding: 8px 15px 8px 15px;
            width: 100%;
            border-radius: 5px !important;
            box-sizing: border-box;
            border: 1px solid #f3e5f5;
            font-size: 15px !important;
            color: #000 !important;
            font-weight: 300;
            }

            input:focus,
            textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #9fa8da;
            outline-width: 0;
            font-weight: 400;
            }

            button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
            }

            .pay {
            width: 80px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #673ab7;
            margin: 10px 20px 10px 0px;
            cursor: pointer;
            box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
            }

            .gray {
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            filter: grayscale(100%);
            color: #e0e0e0;
            }

            .gray .pay {
            box-shadow: none;
            }

            #tax {
            border-top: 1px lightgray solid;
            margin-top: 10px;
            padding-top: 10px;
            }

            .btn-blue {
            border: none;
            border-radius: 10px;
            background-color: #673ab7;
            color: #fff;
            padding: 8px 15px;
            margin: 20px 0px;
            cursor: pointer;
            }

            .btn-blue:hover {
            background-color: #311b92;
            color: #fff;
            }

            #checkout {
            float: left;
            }

            #check-amt {
            float: right;
            }

            @media screen and (max-width: 768px) {
            .book,
            .book-img {
                width: 100px;
                height: 150px;
            }

            .card {
                padding-left: 15px;
                padding-right: 15px;
            }

            .mob-text {
                font-size: 13px;
            }

            .pad-left {
                padding-left: 20px;
            }
            }
    </style>

    <!-- javascript -->
    <script>
        $(document).ready(function () {
            $('.radio-group .radio').click(function () {
                $('.radio').addClass('gray');
                $(this).removeClass('gray');
            });

            $('.plus-minus .plus').click(function () {
                var count = $(this).parent().prev().text();
                $(this)
                .parent()
                .prev()
                .html(Number(count) + 1);
            });

            $('.plus-minus .minus').click(function () {
                var count = $(this).parent().prev().text();
                $(this)
                .parent()
                .prev()
                .html(Number(count) - 1);
            });
        });
    </script>

<title>Pembayaran</title>
</head>
<body>
    <div class="container px-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <h4 class="heading">Pembayaran</h4>
            </div>
            <div class="col-7">
                <div class="row text-right">
                    <div class="col-4">
                        <h6 class="mt-2">Kendaraan & No Plat</h6>
                    </div>
                    <div class="col-4">
                        <h6 class="mt-2">Durasi Sewa</h6>
                    </div>
                    <div class="col-4">
                        <h6 class="mt-2">Biaya</h6>
                    </div>
                </div>
            </div>
        </div>
    <div class="row d-flex justify-content-center border-top">
        <div class="col-5">
            <div class="row d-flex">
                <div class="my-auto flex-column d-flex pad-left">
                    <h6 class="mob-text"><?= $transaksi['kodeVerifikasi'] ?></h6>
                </div>
            </div>
        </div>
        <div class="my-auto col-7">
            <div class="row text-right">
                <div class="col-4">
                    <p class="mob-text"><?= $kendaraan['merekKendaraan'] ?> - <?= $transaksi['noPlat'] ?></p>
                </div>
                <div class="col-4">
                    <div class="row d-flex justify-content-end px-3">
                        <p class="mb-0" id="cnt1">24 Jam</p>
                    </div>
                </div>
                <div class="col-4">
                    <h6 class="mob-text">Rp<?= $transaksi['biaya'] ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                <form action="<?= site_url('pesanan/updatePesanan/'.$transaksi['kodeVerifikasi']) ?>" method="post">
                    <?php $index=1; foreach (array_reverse($pembayaran) as $p) { ?>
                    <div class="col-lg-3 radio-group">
                        <div class="row d-flex px-10 radio">
                            <input type="radio" name="IDPembayaran" id="<?= $p['IDPembayaran'] ?>" value="<?= $p['IDPembayaran'] ?>">
                            <label for="<?= $p['IDPembayaran'] ?>"><?= $p['namaPembayaran'] ?></label>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col">
                        <button type="submit" class="btn-block btn-blue">
                            <span> <span id="checkout">Bayar</span></span>
                        </button>
                    </div>
                </div>
            </div>
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
