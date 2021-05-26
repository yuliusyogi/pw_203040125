<?php
/*
Yulius Yogi Yuwono
203040125
Praktikum PW SHIFT JUMAT JAM 13:00
*/
?>

<?php

// Menghubungkan dengan file php lainya 
require 'php/function.php';


$games = query("SELECT * FROM book");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <table class="table table-bordered table-striped table-hover">
      <?php foreach ($book as $b) : ?>
        <p class="judul">
          <a href="php/detail.php?id=<?= $b['id'] ?>">
            <?= $b["judul"] ?>
          </a>
        </p>
      <?php endforeach; ?>
  </div>
</body>

</html>