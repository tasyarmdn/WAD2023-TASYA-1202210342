<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $harga_mobil = $_POST['harga_mobil'];

    $sql = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) 
            VALUES ('$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>
