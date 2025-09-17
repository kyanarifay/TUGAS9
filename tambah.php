<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">➕ Tambah Buku</h2>
        <form method="post" class="space-y-4">
            <div>
                <label class="block font-medium">Judul</label>
                <input type="text" name="judul" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Stok</label>
                <input type="number" name="stok" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Kategori</label>
                <input type="text" name="kategori" class="w-full border p-2 rounded" required>
            </div>
            <div class="flex gap-2">
                <input type="submit" name="simpan" value="Simpan" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                <a href="index.php" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
            </div>
        </form>

        <?php
        if(isset($_POST['simpan'])){
            $judul = $_POST['judul'];
            $stok = $_POST['stok'];
            $kategori = $_POST['kategori'];

            $sql = "INSERT INTO buku (judul, stok, kategori) VALUES ('$judul','$stok','$kategori')";
            if(mysqli_query($koneksi, $sql)){
                echo "<p class='text-green-600 mt-4'>✅ Data berhasil disimpan. <a href='index.php' class='underline'>Kembali</a></p>";
            }else{
                echo "<p class='text-red-600 mt-4'>❌ Error: " . mysqli_error($koneksi) . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
