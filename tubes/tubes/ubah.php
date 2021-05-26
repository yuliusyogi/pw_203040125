<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM pw_tubes_203040125 WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mobil</title>
</head>

<body>

  <h3>Form Ubah Data Mobil</h3>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="name" autofocus required value="<?= $m['name']; ?>">
        </label>
      </li>
      <li>
        <label>
          Brand :
          <input type="text" name="brand" required value="<?= $m['brand']; ?>">
        </label>
      </li>
      <li>
        <label>
          Deskripsi :
          <input type="text" name="description" required value="<?= $m['description']; ?>">
        </label>
      </li>
      <li>
        <label>
          Kategori :
          <input type="text" name="category" required value="<?= $m['category']; ?>">
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="price" required value="<?= $m['price']; ?>">
        </label>
      </li>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $m['picture']; ?>">
        <label>
          Gambar :
          <input type="file" name="img" class="img" onchange="previewImage()">
        </label>
        <img src="img/<?= $m['picture']; ?>" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>
</body>

</html>