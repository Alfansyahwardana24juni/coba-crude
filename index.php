<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Mahasiswa</title>
</head>

<body>
    <h1>Form Mahasiswa</h1>

    <form action="process.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>

        <label for="nama_bapak">Nama Bapak:</label>
        <input type="text" name="nama_bapak" id="nama_bapak" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea>

        <button type="submit" name="submit">Tambah Data</button>
    </form>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
</style>


<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_alfa_2");

if (isset($_POST['submit'])) {
    // Form submitted, call the tambah function
    tambah($_POST);
    header("Location: index.php"); // Redirect to your main page after adding data
    exit();
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $jeniskelamin = htmlspecialchars($data["jenis_kelamin"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $namabapak = htmlspecialchars($data["nama_bapak"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO tb_kolom (nim, nama, tanggal_lahir, jenis_kelamin, jurusan, nama_bapak, alamat)
          VALUES ('$nim', '$nama', '$tanggallahir', '$jeniskelamin', '$jurusan', '$namabapak', '$alamat')";

    mysqli_query($conn, $query);
}
?>

    </table>
</body>

</html>