<?php
/*
Yulius Yogi Yuwono
203040125
https://github.com/yuliusyogi/pw2021_203040125
Pertemuan 2 - 17 Februari 2021
Mempelajari mengenai sintaks dasar PHP
*/
?>

<?php
// Standar Output
// echo, print
// print_r
// var_dump

echo "Yulius Yogi Yuwono";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh di awali dengan angka, tapi boleh mengandung angka
// $nama = "Yulius Yogi";
// echo 'Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabugn string / concatenation / concat
// . 
// $nama_depan = "Yulius";
// $nama_belakang = "Yogi";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Yulius";
// $nama .= " ";
// $nama .= "Yogi";
// echo "nama";

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < 5);
// var_dump(1 > 5);
// var_dump(1 ==5);
// var_dump(! == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = 10;
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0)
// var_dump($x < 20 || $x % 2 == 0)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang Yulius</h1>
    <p><?php echo "Paragraf"?></p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Halo, Selamat Datang Yulius</h1>"
    ?>
</body>
</html>