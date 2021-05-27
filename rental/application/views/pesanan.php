<!DOCTYPE html>
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
    <!-- Form untuk menampilkan fungsi addPesanan pada controller Pesanan -->
    <form action="<?= site_url('pesanan/addPesanan') ?>" method="post">
        <!-- Menampilkan satu per satu data kendaraan yang ada pada database -->
        <?php $index=1; foreach (array_reverse($kendaraan) as $k) { ?>
        <input type="radio" name="noPlat" id="<?= $k['noPlat'] ?>" value="<?= $k['noPlat'] ?>">
        <label for="<?= $k['noPlat'] ?>"><?= $k['noPlat'] ?> - <?= $k['merekKendaraan'] ?> - <?= $k['jenisKendaraan'] ?> - <?= $k['warnaKendaraan'] ?></label><br>
        <?php } ?>
        <br>
        <button type="submit">Sewa</button>
    </form>
</body>
</html>