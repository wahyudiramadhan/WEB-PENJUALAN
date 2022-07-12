<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menangkap data yang di kirim dari form
if(isset($_POST['tambah_transaksi'])){
    
$id_transaksi = $_POST['id_transaksi'];
$tanggal = date("Y-m-d H:i:s");
$nama = $_POST['nama'];
$id_barang = $_POST['id_barang'];
// menginput data ke database
mysqli_query($koneksi,"INSERT into transaksi values('$id_transaksi','$tanggal','$nama','$id_barang')");
}
header("location:index_transaksi.php");
?>