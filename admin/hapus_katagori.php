<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
if(isset($_GET['id_kat'])){
// menangkap data id yang di kirim dari url
$id_kat = $_GET['id_kat'];
// menghapus data dari database
mysqli_query($koneksi,"DELETE from kategori where id_kat='$id_kat'");
}
header("location:index_katagori.php");
?>