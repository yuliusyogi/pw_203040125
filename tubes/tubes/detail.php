<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mobil berdasarkan id
$m = query("SELECT * FROM pw_tubes_203040125 WHERE id = $id");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mobil</title>
</head>

<body>
  <h3>Detail Mobil</h3>
  <ul>
    <li><img src="img/<?= $m['picture']; ?>" width="250"></li>
    <li>Brand : <?= $m['brand']; ?></li>
    <li>Nama : <?= $m['name']; ?></li>
    <li>Deskripsi : <?= $m['description']; ?></li>
    <li>Kategori : <?= $m['category']; ?></li>
    <li>Harga : <?= $m['price']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">kembali ke daftar mobil</a></li>
  </ul>

</body>

</html>