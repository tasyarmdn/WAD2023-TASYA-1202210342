<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$username = "root";
$password = "";
$nama_database = "MODUL4";

$db = mysqli_connect($host, $username, $password, $nama_database);

if ($db->connect_error) {
    die("Koneksi Gagal: " . $db->connect_error);
} else {

}
?>
