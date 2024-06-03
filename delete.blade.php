<?php
include 'koneksi.php';

// Ambil ID data yang ingin dihapus
$id = $_GET['id'];

// Query untuk menghapus data berdasarkan ID
$sql = "DELETE FROM nama_tabel WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="delete.php?id=123">Hapus Data dengan ID 123</a>