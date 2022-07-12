<?php 
// koneksi database
include '../database/koneksi.php';
if(isset($_GET['id_transaksi'])){
// menangkap data id yang di kirim dari url
$id_transaksi = $_GET['id_transaksi'];
// menghapus data dari database
mysqli_query($koneksi,"delete from transaksi where id_transaksi='$id_transaksi'");
}
header("location:index_transaksi.php");
?>