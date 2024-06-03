<?php
include 'koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

// Query untuk memperbarui data
$sql = "UPDATE nama_tabel SET nama='$nama', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<form action="update.php" method="post">
    ID: <input type="text" name="id"><br>
    Nama: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Perbarui">
</form>