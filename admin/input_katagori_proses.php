<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menangkap data yang di kirim dari form
if(isset($_POST['tambah'])){
$id = $_POST['id_kat'];
$nama = $_POST['nama_katagori'];

// menginput data ke database
mysqli_query($koneksi,"INSERT into kategori values('$id','$nama')");
 
}
header("location:index_katagori.php");
 
?>