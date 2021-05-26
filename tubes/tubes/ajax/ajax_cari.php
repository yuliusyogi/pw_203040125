<?php

require '../functions.php';
$mobil = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0s">
  <tr>
    <th>Id</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Brand</th>
  </tr>

  <?php if (empty($mobil)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic;">data mobil tidak di temukan!</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mobil as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['picture']; ?>"></td>
      <td><?= $m['name']; ?></td>
      <td>
        <a href="detail.php?id=<?= $m['id'] ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
