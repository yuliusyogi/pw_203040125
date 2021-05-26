<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mobil = query("SELECT * FROM pw_tubes_203040125");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mobil = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobil</title>
</head>

<body>
  <a href="logout.php">Logout</a>
  <h3>Mobil</h3>

  <a href="tambah.php">Tambah Data Mobil</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Id</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Brand</th>
      </tr>

      <?php if (empty($mobil)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style: italic;">data mobil tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($mobil as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $m['picture']; ?>" width="60"></td>
          <td><?= $m['name']; ?></td>
          <td>
            <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <script src="js/script.js"></script>

</body>

</html>