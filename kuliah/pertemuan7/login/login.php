<?php

/*
Yulius Yogi Yuwono
203040125
https://github.com/yuliusyogi/pw2021_203040125
Pertemuan 6 - 19 Maret 2021
Mempelajari mengenai GET & POST
*/


// cek apakah tombol submit sudah di klik apa belum

if (isset($_POST["submit"])) {
    // cek username dan password
    if ($_POST['username'] == "admin" && $_POST["password"] == "123") {
        // jika benar kehalaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah tampilkan pesan kesalahan
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>

<body>

    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <p style="color:red;">Username atau Password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li><button type="submit" name="submit">Login</button></li>
        </form>
    </ul>

</body>

</html>