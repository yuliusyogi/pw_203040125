<?php

require '../functions.php';
$mobil = cari($_GET['keyword']);
?>

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