<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>
    <div class="container-fluid p-0 ">
        <!-- Bootstrap row -->
        <div class="row" id="body-row">
            <!-- Sidebar -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                <!-- Bootstrap List Group -->
                <ul class="list-group">
                    <!-- Separator with title -->
                    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small>MAIN MENU</small>
                    </li>
                    <!-- /END Separator -->
                    <!-- Menu with submenu -->
                    <a href="index_transaksi.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-dashboard fa-fw mr-3"></span>
                            <span class="menu-collapsed">TRANSAKSI</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a>
                    <a href="index_barang.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-user fa-fw mr-3"></span>
                            <span class="menu-collapsed">BARANG</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a>
                    
                    <a href="index_katagori.php" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-tasks fa-fw mr-3"></span>
                            <span class="menu-collapsed">KATAGORI</span>
                        </div>
                    </a>
                    <!-- Separator with title -->
                   
                    <!-- Separator without title -->
                    <li class="list-group-item sidebar-separator menu-collapsed"></li>
                    <!-- /END Separator -->
                    <a href="info.php" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-question fa-fw mr-3"></span>
                            <span class="menu-collapsed">INFO</span>
                        </div>
                    </a>                
                    <!-- Logo -->
                    <li class="list-group-item logo-separator d-flex justify-content-center">
                    <a href="logout.php" class=" text-black-50"> LOG OUT </a>
                    </li>
                </ul>
                <!-- List Group END-->
            </div>
            <!-- sidebar-container END -->
            <!-- MAIN -->
            <div class="col">
                <h1>
                    BARANG
                    
                </h1>
                <div class="form-group col-18" >
                    <div class="card-header">
                    <i>TAMBAH KATAGORI</i>
                    </div>
                    <form action="input_barang_proses.php" method="post">
                    <table>
                    <tr>			
                        <td>NAMA BARANG</td>
                        <input type="hidden" name="id_barang">
                        <td><input type="text" name="nama_barang"></td>
                    </tr>    
                    <tr>
                        <td>KATAGORI</td>
                        <td>
                        <select name="id_kat">
                        <option>--- Pilih Katagori ---</option>
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","db_penjualan");
                        // Check connection
                        if (mysqli_connect_errno()){
                            echo "Koneksi database gagal : " . mysqli_connect_error();
                        }
                        $data = mysqli_query($koneksi,"SELECT * FROM kategori ");
                        if(mysqli_num_rows($data) != 0){
                            while($row = mysqli_fetch_assoc($data)){
                                echo '<option>' .$row['id_kat']. '</option>';
                            }
                        }
                        ?>
                        </select>
                        </td>
                    </tr>
                    <tr>			
                        <td>harga barang</td>
                        <td><input type="text" name="harga_barang"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="tambah_barang" class="btn btn-success"value="SIMPAN"></td>
                    </tr>	   
                    </table>
                    </form>
                    </div>
                    
                        </div>
                    
                    <div class="card-body">
                        <ul>                     
            </div>
            <!-- Main Col END -->
        </div>
        <!-- body-row END -->
    </div>
    <!-- container -->
</body>
</html>