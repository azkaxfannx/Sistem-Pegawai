<?php
    session_start();

    require_once('function.php'); 

    $listDBPegawai = '../database/db_pegawai/';

    UserFunction::rejectUser();
    Fiture::balikDashboard();
    Pegawai::validasiTambahDataPegawai($listDBPegawai);
    Pegawai::hapusDataPegawai($listDBPegawai);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pegawai</title>
</head>
<body>
    <form method="post">
        <label for="cariData">Cari Data Pegawai Berdasarkan NIK</label>
        <br><br>
        <input type="number" name="cariData" placeholder="Masukkan NIK Pegawai">
        <button type="submit" name="submitCariDataPegawai">Cari Data!</button>
    </form>
    <br><br><br>
    <div style="text-align: center;">
        <?php
            DatabaseFunction::tampilDBPegawai($listDBPegawai);
        ?>
    </div>
    <br><br>
    <form method="post" style="text-align: center;">
        <select name="pilihDatabase">
            <option value="default" disabled <?= empty($_SESSION['selectedDatabase']) ? 'selected' : null; ?>>List Database Pegawai</option>
            <?php DatabaseFunction::tampilDBSelect($listDBPegawai); ?>
        </select>
        <button type="submit" name="submitPilihanDB">Pilih Database!</button>
    </form>
    <br><br>
    <form method="post" style="text-align: center;">
        <button type="submit" name="tambahDataPegawai">Tambah Data Pegawai</button>
    </form>
    
    <?php
        $tampilForm = isset($_POST['tambahDataPegawai']);
        if($tampilForm):
    ?>
    <br><br>
        <h3>Tambah Data Pegawai</h3>
        <form method="post">
            <input type="number" name="nik" placeholder="NIK" required>
            <br><br>
            <input type="text" name="nama" placeholder="Nama" required>
            <br><br>
            <textarea name="alamat" cols="30" rows="10" placeholder="Alamat" required></textarea>
            <br><br>
            <input type="text" name="unit" placeholder="Unit" required>
            <br><br>
            <label>Golongan</label>
            <br>
            <input type="radio" name="golongan" value="IV-A">
            <label for="IV-A">IV-A</label>
            <br>
            <input type="radio" name="golongan" value="IV-B">
            <label for="IV-B">IV-B</label>
            <br>
            <input type="radio" name="golongan" value="IV-C">
            <label for="IV-C">IV-C</label>
            <br>
            <input type="radio" name="golongan" value="III-A">
            <label for="III-A">III-A</label>
            <br>
            <input type="radio" name="golongan" value="III-B">
            <label for="III-B">III-B</label>
            <br>
            <input type="radio" name="golongan" value="III-C">
            <label for="III-C">III-C</label>
            <br><br>
            <input type="number" name="jumlahAnak" placeholder="Jumlah Anak" required>
            <br><br>
            <input type="number" name="masuk" placeholder="Jumlah Hari Masuk (Selain Sabtu dan Minggu)" required>
            <br><br>
            <input type="number" name="jamKerja" placeholder="Jam Kerja" required>
            <br><br>
            <button type="submit" name="submitDataPegawai">Kirim Data Pegawai!</button>
        </form>
    <?php endif; ?>
    <br><br>
        <?php 
        Pegawai::ubahDataPegawai($listDBPegawai); 
        Pegawai::detailDataPegawai($listDBPegawai);
        Pegawai::cariDataPegawai($listDBPegawai);
        ?>
    <br>
    <br><br>
    <form method="post">
        <button type="submit" name="balikDashboard">Kembali ke Dashboard</button>
    </form>
</body>
</html>