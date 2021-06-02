<?php

/*
Yulius Yogi Yuwono
203040125
https://github.com/yuliusyogi/pw2021_203040125
Pertemuan 12 - 7 May 2021
Mempelajari mengenai login & registrasi
*/

session_start();
session_destroy();
header("Location: login.php");
exit;
