<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
    <h2 class="mb-4">✏ Ubah Buku</h2>
    <?php
    $id = $_GET['id'];
    $result = $koneksi->query("SELECT * FROM buku WHERE id_buku=$id");
    $data = $result->fetch_assoc();
    ?>
    <form method="post" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" value="<?= $data['stok'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" value="<?= $data['kategori'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Diskon (%)</label>
            <input type="number" name="diskon" value="<?= $data['diskon'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Kadaluarsa</label>
            <input type="date" name="tanggal_kadaluarsa" value="<?= $data['tanggal_kadaluarsa'] ?>" class="form-control">
        </div>
        <button type="submit" name="ubah" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php
if (isset($_POST['ubah'])) {
    $judul = $_POST['judul'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $diskon = $_POST['diskon'];
    $tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];

    $query = "UPDATE buku SET judul='$judul', stok='$stok', kategori='$kategori', 
              diskon='$diskon', tanggal_kadaluarsa='$tanggal_kadaluarsa' 
              WHERE id_buku=$id";

    if ($koneksi->query($query)) {
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger'>Gagal update data: " . $koneksi->error . "</div>";
    }
}
?>
</body>
</html>