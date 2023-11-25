<?php
    session_start();

    require_once('function.php');

    UserFunction::loginUser();

    if(isset($_SESSION['user'])) {
        header('Location: ./dashboard.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Pegawai</title>
</head>
<body>
    <h1 style="text-align: center;">Halaman Login <br> Sistem Pegawai PT. Mencari Cinta Sejati</h1>
    <br><br>
    <form method="post" style="text-align: center;">
        <input type="text" name="username" placeholder="Masukkan Username" style="width: 10%; padding: 0.5%;" required>
        <br><br>
        <input type="password" name="password" placeholder="Masukkan Password" style="width: 10%; padding: 0.5%;" required>
        <br><br>
        <button type="submit" name="submitLogin">Login!</button>
    </form>
</body>
</html>