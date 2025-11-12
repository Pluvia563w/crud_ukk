<?php include 'koneksi.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah alumni</title>
    <link rel ="stylesheet" href="alpi.css">
</head>
<body>
    <h2>Tambah data alumni</h2>
    <form method="POST">
        <input type="text" name= "nama" placeholder="Nama" required>
        <input type="text" name= "nik" placeholder="NIK" required>
        <input type="text" name= "nisn" placeholder="NISN" required>
        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
        <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
        <textarea name="alamat" placeholder="Alamat" required></textarea>
        <input type="number" name="tahun_lulus" placeholder="Tahun Lulus" required>
        <input type="text" name="jurusan" placeholder="Jurusan" required>
        <button type="submit" name="submit">Simpan</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO latian (nama, nik, nisn, tempat_lahir, tanggal_lahir, alamat, tahun_lulus, jurusan)
            VALUES ('$_POST[nama]', '$_POST[nik]', '$_POST[nisn]', '$_POST[tempat_lahir]', '$_POST[tanggal_lahir]', '$_POST[alamat]', '$_POST[tahun_lulus]', '$_POST[jurusan]')";
        mysqli_query($conn, $sql);
        echo "<p>Data berhasil disimpan! <a href='index.php'>Kembali</a></p>";
    }
    ?>
</body>
</html>