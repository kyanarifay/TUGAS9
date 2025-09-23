<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
    <h2 class="mb-4">➕ Tambah Buku</h2>
    <form method="post" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Diskon (%)</label>
            <input type="number" name="diskon" class="form-control" value="0">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Kadaluarsa</label>
            <input type="date" name="tanggal_kadaluarsa" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tebal Buku (halaman)</label>
            <input type="number" name="tebal_buku" class="form-control" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $diskon = $_POST['diskon'];
    $tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];
    $tebal_buku = $_POST['tebal_buku'];

    $query = "INSERT INTO buku (judul, stok, kategori, diskon, tanggal_kadaluarsa, tebal_buku) 
              VALUES ('$judul','$stok','$kategori','$diskon','$tanggal_kadaluarsa','$tebal_buku')";
    if ($koneksi->query($query)) {
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger'>Gagal menyimpan data: " . $koneksi->error . "</div>";
    }
}
?>
</body>
</html>