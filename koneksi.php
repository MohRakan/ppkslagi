<?php
// Konfigurasi koneksi ke database
$server = "localhost"; // Ganti sesuai dengan nama server database Anda
$username = "webppkss_webppks"; // Ganti dengan username database Anda
$password = "ridhoganteng123_"; // Ganti dengan password database Anda
$database = "webppkss_webppks"; // Ganti dengan nama database yang ingin Anda gunakan

// Membuat koneksi
$koneksi = new mysqli($server, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>