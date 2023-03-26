<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_pemesan   = $_POST['nama_pemesan'];
$email          = $_POST['email'];
$no_hp          = $_POST['no_hp'];
$nama_tamu      = $_POST['nama_tamu'];
$cekin          = $_POST['cekin'];
$cekout         = $_POST['cekout'];
$jumlah         = $_POST['jumlah'];
$tipe_kamar      = $_POST['tipe_kamar'];
// query SQL untuk insert data
$query="INSERT INTO pemesanan SET nama_pemesan='$nama_pemesan',nomor_hp='$no_hp',email='$email',nama_tamu = '$nama_tamu', cekin ='$cekin', cekout ='$cekout',jumlah='$jumlah',tipe_kamar='$tipe_kamar'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
echo " <script> alert('Data kamu berhasil ditambah'); location.href='index.php'</script>";