<?php 
// koneksi database
include '../database/koneksi.php';
if(isset($_GET['id_barang'])){
// menangkap data id yang di kirim dari url
$id_barang = $_GET['id_barang'];
// menghapus data dari database
mysqli_query($koneksi,"delete from barang where id_barang='$id_barang'");
}
header("location:index_barang.php");
?>