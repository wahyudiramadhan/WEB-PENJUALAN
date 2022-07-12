<?php 
// koneksi database

$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

if(isset($_POST['update'])){
// menangkap data yang di kirim dari form
$id_kat = $_POST['id_kat'];
$nama_kat = $_POST['nama_katagori'];
// update data ke database
mysqli_query($koneksi,"UPDATE kategori set nama_katagori='$nama_kat' where id_kat='$id_kat'");
}
// mengalihkan halaman kembali ke index.php
header("location:index_katagori.php");

?>