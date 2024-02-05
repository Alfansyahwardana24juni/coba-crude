<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM remaja_masjid WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil dihapus. <a href='tampil.php'>Kembali</a>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "ID tidak valid.";
}

$conn->close();
?>

