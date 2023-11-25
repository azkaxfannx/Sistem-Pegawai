<?php
    session_start();

    require_once('function.php');

    UserFunction::rejectUser();
    Fiture::balikDashboard();

    $listDBPegawai = '../database/db_pegawai/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Pegawai</title>
</head>
<body>
    <h1 style="text-align: center;">Database Pegawai</h1>
    <br><br>
    <form method="post" style="text-align: center;">
        <input type="text" name="namaDatabasePegawai" placeholder="Masukkan Nama Database" style="width: 15%; padding: 0.7%; text-align: center;" required>
        <br><br>
        <button type="submit" name="submitNamaDatabasePegawai">Buat Database!</button>
    </form>
    <br><br>
    <div style="text-align: center;">
        <?php

            DatabaseFunction::buatDB();
            DatabaseFunction::hapusDB($listDBPegawai);
            DatabaseFunction::tampiltDB($listDBPegawai);

            echo "<br>";
        ?>
    </div>
    <br>
    <br><br>
    <form method="post">
        <button type="submit" name="balikDashboard">Kembali ke Dashboard</button>
    </form>
</body>
</html>