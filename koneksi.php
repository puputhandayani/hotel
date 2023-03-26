<?php 
$servername = "localhost";
$username	= "root";
$password	= "";
$database	= "db_hotel";

$koneksi = mysqli_connect("localhost","root","","nebula");

//cek koneksi
if (mysqli_connect_errno()){
	echo "koneksi database gagal: ". mysqli_connect_error();
}

	?>