<?php
require 'function.php' ;

if ( isset($_POST["submit"])){

    if (tambah($_POST) > 0 ){
        echo "<script>
                alert('Data Berhasil');
                document.location.href = 'index.php';
              </script>";
    }else {
        echo "<script>
                alert('Data Tidak Berhasil');
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
    <title>Document</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="nim">nim</label>
            <input type="text" name="nim" id="nim" require>
        </li>
        <li>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" require>
        </li>
        <li>
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" require>
        </li>
        <li>
            <label for="tanggal lahir">Tanggal Lahir</label>
            <input type="text" name="tanggal lahir" id="tanggal lahir" require>
        </li>
        <li>
            <label for="jenis kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis kelamin" id="jenis kelamin" require>
        </li>
        <li>
            <label for="jenis kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis kelamin" id="jenis kelamin" require>
        </li>
        <li>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" require>
        </li>
        <li>
            <label for="nama bapak">Nama Bapak</label>
            <input type="text" name="nama bapak" id="nama bapak" require>
        </li>
        <li>
            <label for="Alamat">Alamat</label>
            <input type="text" name="Alamat" id="Alamat" require>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
</body>
</html>