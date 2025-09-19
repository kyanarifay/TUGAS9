<?php
$host = "localhost";
$user = "xirpl2-32"; // default user XAMPP
$pass = "3089614104";     // default password kosong
$db   = "db_xirpl2-32_1  ";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>