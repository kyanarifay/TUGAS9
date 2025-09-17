<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];
    
    $sql = "DELETE FROM buku WHERE id_buku = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id_buku);
    
    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($koneksi);
?>