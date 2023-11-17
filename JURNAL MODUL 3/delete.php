<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
include 'connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM showroom_mobil WHERE id = $id";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data Berhasil dihapus');</script>";
        echo "<script>window.location.href = 'list_mobil.php';</script>";
    } else {
        echo "<script>alert('Data Gagal dihapus');</script>";
        echo "<script>window.location.href = 'list_mobil.php';</script>";
    }
}

$koneksi->close();
?>

// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil

    // (4) Buatkan perkondisi jika eksekusi query berhasil

// Tutup koneksi ke database setelah selesai menggunakan database

?>