<?php
// Yulius Yogi Yuwono
// 203040125
// https://github.com/yuliusyogi/pw2021_203040125
// Pertemuan 4 - 4 Maret 2021
// Mempelajari mengenai Function
?>

<?php  
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
// echo date("l", strtotime("25 aug 1985"));
?>

<?php  
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Yulius Yogi Yuwono"); ?></h1>
</body>
</html>