<?php

/*
Yulius Yogi Yuwono
203040125
https://github.com/yuliusyogi/pw2021_203040125
Pertemuan 9 - 16 April 2021
Mempelajari mengenai PHP & MySQL
*/

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
