<?php
require 'function.php';

$id = $_GET["id"];

$ubahDB = query("SELECT * FROM tb_kolom WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Tidak Berhasil diubah');
                document.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Rutan</title>
</head>

<body>
    <h1>Edit Data Rutan</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="Nama">Nim</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $ubahDB["nim"]; ?>">
            </li>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $ubahDB["nama"]; ?>">
            </li>
            <li>
                <label for="Umur">Tanggal Lahir</label>
                <input type="text" name="Umur" id="Umur" required value="<?= $ubahDB["tanggal_lahir"]; ?>">
            </li>
            <li>
                <label for="penjara">Jenis Kelamin</label>
                <input type="text" name="penjara" id="penjara" required value="<?= $ubahDB["jenis_kelamin"]; ?>">
            </li>
            <li>
                <label for="kasus">Jurusan</label>
                <input type="text" name="kasus" id="kasus" required value="<?= $ubahDB["jurusan"]; ?>">
            </li>
            <li>
                <label for="kasus">Nama Bapak</label>
                <input type="text" name="kasus" id="kasus" required value="<?= $ubahDB["nama bapak"]; ?>">
            </li>
            <li>
                <label for="kasus">Alamat</label>
                <input type="text" name="kasus" id="kasus" required value="<?= $ubahDB["alamat"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>
    </form>
</body>

</html>