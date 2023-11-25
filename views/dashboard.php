<?php
    session_start();

    require_once('function.php');

    UserFunction::rejectUser();
    UserFunction::logoutUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sistem Pegawai</title>
</head>
<body>
    <h1 style="text-align: center;">Selamat Datang di Dashboard <br> Sistem Pegawai PT. Mencari Cinta Sejati</h1>
    <br><br>
    <form action="buatDatabase.php" method="post">
        <button type="submit" name="buatDatabase">Database Pegawai</button>
    </form>
    <br>
    <form action="pegawai.php" method="post">
        <button type="submit" name="pegawai">Pegawai</button>
    </form>
    <br>
    <form method="post">
        <button type="submit" name="logout">Log Out</button>
    </form>
</body>
</html>