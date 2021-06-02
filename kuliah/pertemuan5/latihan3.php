<?php
/*
Yulius Yogi Yuwono
203040125
https://github.com/yuliusyogi/pw2021_203040125
Pertemuan 5- 5 Maret 2021
Mempelajari mengenai Array
*/


$mahasiswa = [
    ["Yulius Yogi Yuwono", "203040125", "Teknik Informatika", "yogiyuwono12@gm,ail.com"],
    ["Rafi Nuril Akbar F", "203040135", "Teknik Informatika", "rafinarfirmansyah29@gmail.com"],
    ["Muhammad Fasha Ginting", "203040172", "Teknik Informatika", "mhdfasha@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>