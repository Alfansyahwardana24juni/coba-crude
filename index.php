<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "db_alfa_2");
$penjara = mysqli_query($conn, "SELECT * FROM tb_kolom");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>nim</th>
            <th>Nama</th>
            <th>tanggal lahir</th>
            <th>jenis kelamin</th>
            <th>jurusan</th>
            <th>nama bapak</th>
            <th>alamat</th>
        </tr>
        <?php $i = 1; ?>
        <?php
        foreach ($penjara as $row) :
        ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["tanggal_lahir"]; ?></td>
                <td><?= $row["jenis_kelamin"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["nama bapak"]; ?></td>
                <td><?= $row["alamat"]; ?></td>

            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>