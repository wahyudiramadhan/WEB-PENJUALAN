<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

if(isset($_POST['update'])){
// menangkap data yang di kirim dari form
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_kat = $_POST['id_kat'];
$harga_barang = $_POST['harga_barang'];
// update data ke database
mysqli_query($koneksi,
        "UPDATE barang set nama_barang='$nama_barang',id_kat='$id_kat', harga_barang='$harga_barang' where id_barang='$id_barang'");
}
// mengalihkan halaman kembali 
header("location:index_barang.php")
?>