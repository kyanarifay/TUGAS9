<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
    <h2 class="mb-4">📚 Data Buku</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">➕ Tambah Buku</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Diskon (%)</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = $koneksi->query("SELECT * FROM buku");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id_buku']}</td>
                <td>{$row['judul']}</td>
                <td>{$row['stok']}</td>
                <td>{$row['kategori']}</td>
                <td>{$row['diskon']}</td>
                <td>{$row['tanggal_kadaluarsa']}</td>
                <td>
                    <a href='ubah.php?id={$row['id_buku']}' class='btn btn-warning btn-sm'>✏ Ubah</a>
                    <a href='hapus.php?id={$row['id_buku']}' onclick='return confirm(\"Yakin hapus?\")' class='btn btn-danger btn-sm'>🗑 Hapus</a>
                </td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>