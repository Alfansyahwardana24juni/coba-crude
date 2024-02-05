<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_alfa_2");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    // menyediakan wadahnya
    $rows = [];
    // yg akan di ambil setiap data
    while ($row = mysqli_fetch_assoc($result)) {
        // menambahkan elemen baru setiap array
        $rows[] = $row;
    }
    //mengembalikan data, rows bentuknya sudah array assosiatif
    return $rows;
}


function tambah($data)
{
    global $conn;
    // ambil data dari tiap elemen dalam form
    // ambil data dari tiap elemen dalam form
    $nim            = htmlspecialchars($data["nim"]);
    $nama           = htmlspecialchars($data["nama"]);
    $tanggallahir   = htmlspecialchars($data["tanggal_lahir"]);
    $jeniskelamin   = htmlspecialchars($data["jenis_kelamin"]);
    $jurusan        = htmlspecialchars($data["jurusan"]);
    $namabapak      = htmlspecialchars($data["nama bapak"]);
    $alamat         = htmlspecialchars($data["alamat"]);
    // query insert data
    $query = "INSERT INTO db_alfa_2 (nim, nama, tanggal_lahir, jenis_kelamin,jurusan,nama bapak,alamat)
          VALUES ('$nim', '$nama', '$tanggallahir', '$jeniskelamin','$jurusan','$namabapak','$alamat')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_alfa_2 WHERE id = $id");


    return mysqli_affected_rows($conn);
}
function update($data)
{
    global $conn;
    $nim            = htmlspecialchars($data["nim"]);
    $nama           = htmlspecialchars($data["nama"]);
    $tanggallahir   = htmlspecialchars($data["tanggal_lahir"]);
    $jeniskelamin   = htmlspecialchars($data["jenis_kelamin"]);
    $jurusan        = htmlspecialchars($data["jurusan"]);
    $namabapak      = htmlspecialchars($data["nama bapak"]);
    $alamat         = htmlspecialchars($data["alamat"]);
    // query insert data
    $query = "UPDATE tb_kolom SET
            nim          = '$nim',
            nama         = '$nama',
            tanggal_lahir = '$tanggallahir',
            jenis_kelamin = '$jeniskelamin',
            jurusan        = '$jurusan',
            nama bapak        = '$namabapak',
            alamat        = '$alamat',
        WHERE id         =  id
        ";

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM tb_kolom WHERE nim LIKE '$keyword' OR nama LIKE '$keyword'
            ";
    return query($query);
}
