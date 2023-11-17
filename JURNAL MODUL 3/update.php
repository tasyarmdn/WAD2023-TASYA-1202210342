<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
include 'connect.php';

function update($koneksi, $data){
    $id = $data['id'];
    $nama_mobil = $data['nama_mobil'];
    $brand_mobil = $data['brand_mobil'];
    $warna_mobil = $data['warna_mobil'];
    $tipe_mobil = $data['tipe_mobil'];
    $harga_mobil = $data['harga_mobil'];

    $sql = "UPDATE showroom_mobil SET 
            nama_mobil = '$nama_mobil',
            brand_mobil = '$brand_mobil',
            warna_mobil = '$warna_mobil',
            tipe_mobil = '$tipe_mobil',
            harga_mobil = '$harga_mobil'
            WHERE id = $id";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data Berhasil diubah');</script>";
        echo "<script>window.location.href = 'list_mobil.php';</script>";
    } else {
        echo "<script>alert('Data Gagal diubah');</script>";
        echo "<script>window.location.href = 'list_mobil.php';</script>";
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $data = array(
        'id' => $id,
        'nama_mobil' => $_POST['nama_mobil'],
        'brand_mobil' => $_POST['brand_mobil'],
        'warna_mobil' => $_POST['warna_mobil'],
        'tipe_mobil' => $_POST['tipe_mobil'],
        'harga_mobil' => $_POST['harga_mobil']
    );

    update($koneksi, $data);
}

$koneksi->close();
?>

// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>