<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM buku WHERE id_buku=$id";

if ($koneksi->query($query)) {
    header("Location: index.php");
} else {
    echo "<div class='alert alert-danger'>Gagal hapus data: " . $koneksi->error . "</div>";
}
?>