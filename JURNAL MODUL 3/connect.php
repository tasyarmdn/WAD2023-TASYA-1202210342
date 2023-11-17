<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$username = "root";
$password = "";
$nama_database = "modul3_wad";

$koneksi = mysqli_connect($host, $username, $password, $nama_database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} else {

}
?>

