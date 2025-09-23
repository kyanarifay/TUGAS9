<?php
$host = "localhost";
$user = "xirpl2-32"; // default XAMPP
$pass = "3089614104";
$db   = "db_xirpl2-32_1";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>