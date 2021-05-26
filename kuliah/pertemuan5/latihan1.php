<?php
// Yulius Yogi Yuwono
// 203040125
// https://github.com/yuliusyogi/pw2021_203040125
// Pertemuan 5 - 5 Maret 2021
// Mempelajari mengenai array


// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// manampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// manambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>