<?php  
//tambahkan koneksi
include '../koneksi.php';

//ambil data dari form edit
$id_pemesanan = $_POST['id_pemesanan'];
$status = $_POST['status'];

//update data ke tabel databases
mysqli_query($koneksi, "UPDATE pemesanan set id_pemesanan='$id_pemesanan', status='$status' WHERE id_pemesanan='$id_pemesanan'");

//mengalihkan ke halaman index setelah berhail mengupdate
header("location:resepsionis.php?page=reservasi");
?>