<?php

/*
Yulius Yogi Yuwono
203040125
https://github.com/yuliusyogi/pw2021_203040125
Pertemuan 11 - 30 April 2021
Mempelajari mengenai delete, update & searching data
*/

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// menagmbil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal dihapus!";
}
