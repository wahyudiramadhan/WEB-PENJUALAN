<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menangkap data yang di kirim dari form
if(isset($_POST['tambah_barang'])){
    
$id_barang = $_POST['id_barang'];
$id_kat = $_POST['id_kat'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
// menginput data ke database
mysqli_query($koneksi,"INSERT into barang values('$id_barang','$id_kat','$nama_barang','$harga_barang')");
}
header("location:index_barang.php");
?>