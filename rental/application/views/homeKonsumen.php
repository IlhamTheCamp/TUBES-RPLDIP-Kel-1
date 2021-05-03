<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Login</title>
</head>
<body>
    <h1>Selamat, berhasil login</h1>
    <h2>Username kamu <?php echo $_SESSION['username'] ?></h2>

    <p>Ini masih sementara, hanya untuk testing sequence login, IMK HomeKonsumen masih dalam progress</p>

    <p><a href="<?= site_url('kendaraan/pesanan') ?>">Pesanan</a></p>
</body>
</html>