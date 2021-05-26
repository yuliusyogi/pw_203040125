<?php 

// Yulius Yogi Yuwono
// 203040125
// https://github.com/yuliusyogi/pw2021_203040125
// Pertemuan 6 - 19 Maret 2021
// Mempelajari mengenai GET & POST


if( !isset($_GET["judul"]) ||
    !isset($_GET["sutradara"]) ||
    !isset($_GET["rilis"]) ||
    !isset($_GET["genre"]) ||
    !isset($_GET["gambar"]) ) {
    // redirect -> memindahkan user ke halaman lain
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Fim</title>
</head>
<body>

<ul>
    <li><img src="gambar/<?= $_GET["gambar"]; ?>"></li>
    <li>Judul : <?= $_GET["judul"] ?></li>
    <li>Sutradara : <?= $_GET["sutradara"] ?></li>
    <li>Rilis : <?= $_GET["rilis"] ?></li>
    <li>Genre : <?= $_GET["genre"] ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar film</a>

</body>
</html>