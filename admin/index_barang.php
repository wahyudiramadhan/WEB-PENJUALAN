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
                <a href="input_barang.php">tambah data</a>
                <div class="card">
                    <div class="card-header"><form action="index_barang.php" method="get">
                    <label>Cari :</label>
                    <input type="text" class=" col-5" name="cari">
                    <input type="submit" value="Cari">
                    </form></div>
                    <div class="card-body">
                        <ul>
                        <?php 
                        // koneksi database
                        $koneksi = mysqli_connect("localhost","root","","db_penjualan");
                        
                        // Check connection
                        if (mysqli_connect_errno()){
                            echo "Koneksi database gagal : " . mysqli_connect_error();
                        }
                        ?>
            <?php 
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                echo "<b>Hasil pencarian : ".$cari."</b>";
            }
            ?>
            <table class="table col-1 table-striped" border="0.1" >
                    <tr >
                        <th>NO</th>
                        <th>ID BARANG</th>
                        <th>NAMA BARANG</th>
                        <th>KATAGORI</th>
                        <th>HARGA BARANG</th>
                        <th>OPTION</th>
                        
                    </tr>
                <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysqli_query($koneksi,"SELECT * from barang INNER JOIN kategori ON barang.id_kat = kategori.id_kat  where nama_barang like '%".$cari."%'");				
                }else{
                    $data = mysqli_query($koneksi,"SELECT * from barang INNER JOIN kategori ON barang.id_kat = kategori.id_kat ORDER BY id_barang DESC");
                }
                $no = 1;
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['id_barang']; ?></td>
                                        <td><?php echo $d['nama_barang']; ?></td>
                                        <td><?php echo $d['nama_katagori']; ?></td>
                                        <td><?php echo $d['harga_barang']; ?></td>
                                        <td>
                                            <a name="id_barang" class=" badge-warning btn" href="edit_barang.php?id_barang=<?php echo $d['id_barang']; ?>">EDIT</a>
                                            <a name="id_barang" class=" badge-danger btn" href="hapus_barang.php?id_barang=<?php echo $d['id_barang']; ?>">HAPUS</a>
                                        </td>
                        </tr>
                <?php } 
                
                ?>
            </table>





                        </ul>
                    </div>  
                </div>



            </div>
            <!-- Main Col END -->

        </div>
        <!-- body-row END -->


    </div>
   
    <!-- container -->
</body>


</html>