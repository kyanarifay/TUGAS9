<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Buku</title>
</head>
<body>
    <h2>Ubah Buku</h2>
    <?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id");
    $data = mysqli_fetch_array($query);
    ?>

    <form method="post">
        Judul: <input type="text" name="judul" value="<?php echo $data['judul']; ?>" required><br><br>
        Stok: <input type="number" name="stok" value="<?php echo $data['stok']; ?>" required><br><br>
        Kategori: <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if(isset($_POST['update'])){
        $judul = $_POST['judul'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];

        $sql = "UPDATE buku SET judul='$judul', stok='$stok', kategori='$kategori' WHERE id_buku=$id";
        if(mysqli_query($koneksi, $sql)){
            echo "Data berhasil diupdate <a href='index.php'>Kembali</a>";
        }else{
            echo "Error: " . mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>
