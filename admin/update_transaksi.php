<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

if(isset($_POST['update_transaksi'])){
// menangkap data yang di kirim dari form
$id_transaksi = $_POST['id_transaksi'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$id_barang = $_POST['id_barang'];
mysqli_query($koneksi,"UPDATE transaksi set nama='$nama',tanggal='$tanggal',id_barang='$id_barang' where id_transaksi='$id_transaksi'");
}
// mengalihkan halaman kembali 
header("location:index_transaksi.php")
?>