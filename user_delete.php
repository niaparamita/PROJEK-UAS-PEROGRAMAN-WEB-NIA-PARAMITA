<?php
require_once "koneksi.php";

// Ambil ID produk
$id = $_GET['id'];

// Hapus data berdasarkan ID
$query = mysqli_query($conn, "DELETE FROM products WHERE id_p='$id'");

// Cek hasil
if($query){
    echo "
    <script>
        alert('Data produk berhasil dihapus!');
        window.location='barang.php';
    </script>";
}else{
    echo "
    <script>
        alert('Data produk gagal dihapus!');
        window.location='barang.php';
    </script>";
}
?>