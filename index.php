<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">📚 Data Buku</h2>
        <a href="tambah.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Buku</a>
        <br><br>
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Judul</th>
                    <th class="border p-2">Stok</th>
                    <th class="border p-2">Kategori</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM buku");
                while($data = mysqli_fetch_array($query)){
                    echo "<tr class='hover:bg-gray-50'>
                        <td class='border p-2'>".$data['id_buku']."</td>
                        <td class='border p-2'>".$data['judul']."</td>
                        <td class='border p-2'>".$data['stok']."</td>
                        <td class='border p-2'>".$data['kategori']."</td>
                        <td class='border p-2'>
                            <a href='ubah.php?id=".$data['id_buku']."' class='bg-yellow-400 hover:bg-yellow-500 text-white px-2 py-1 rounded'>Ubah</a>
                            <a href='hapus.php?id=".$data['id_buku']."' onclick=\"return confirm('Yakin hapus?');\" class='bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded'>Hapus</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
