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
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Mobil</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="style.css">

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">My shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Hubungi Kami</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bantuan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="tambah.php">Tambah Data Mobil</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>

        </ul>
        <form action="" method="POST">
          <input class="keyword" type="search" placeholder="Search" aria-label="Search">
          <button class="tombol-cari" type="cari">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="row mt-5">
    <div class="col-md-2 bg-light">
      <ul class="list-group list-group-flush p-2 pt-4">
        <li class="list-group-item bg-success"><i class="fas fa-list"></i> Kategori Produk</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> BMW</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Ferrari</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Lamborghini</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Mclaren</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Mercedes Benz</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Porsche</li>
      </ul>
    </div>
    <div class="col-md-10">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/720.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/458.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/G63.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <h4 class="text-center font-weigth-bold m-4">PRODUK TERBARU</h4>
      <div>
        <div class="row g-0">
          <div class="card mb-3" style="width: 16rem;">
            <?php if (empty($mobil)) : ?>
              <p style="color: red; font-style: italic;">data mobil tidak ditemukan!</p>
            <?php endif; ?>

            <?php $i = 1;
            foreach ($mobil as $m) : ?>
              <img src="img/<?= $m['picture']; ?>" alt="">
              <div class="card-body">
                <h5 class="card-title"><?= $m['name']; ?></h5>
                <a href="detail.php?id=<?= $m['id']; ?>" class="btn btn-primary">Detail</a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="mobil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-dark text-white p-5">
      <div class="row">
        <div class="col-md-3">
          <h5>LANAN PELANGGAN</h5>
          <ul>
            <li>Pusat Bantuan</li>
            <li>Cara Pembelian</li>
            <li>Pengiriman</li>
            <li>Pengembalian</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>LANAN PELANGGAN</h5>
          <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, tempore illum. Iure vitae quis, accusantium fugiat aliquam animi! Sit illum pariatur fuga. Cupiditate saepe voluptate, itaque quod atque dignissimos sapiente.</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>LANAN PELANGGAN</h5>
          <ul>
            <li>Indo Cars Gruop</li>
            <li>BMW Gruop</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>HUBUNGI KAMI</h5>
          <ul>
            <li>0812-0070-7264</li>
            <li>unpasshowroom@gmail.com</li>
          </ul>
        </div>
      </div>
      <p class="flow-text bg-succes text-center mt-5">Developed by Yulius Yogi Yuwono Copyright <i class="far fa-copyright"></i> 2021.</p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>