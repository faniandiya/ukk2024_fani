<?php
$hostname = "localhost"; // Nama server
$userdb = "root";    // Nama pengguna database
$passdb = "";    // Kata sandi database
$namedb = "gallery_faniandiya"; // Nama database

// Membuat koneksi
$conn = mysqli_connect("$hostname","$userdb","$passdb","$namedb");

// Memeriksa koneksi
// if (!$conn) {
    // die("Connection Failed: " . mysqli_connect_error());
// }

// echo "Connection Successful";
?>
