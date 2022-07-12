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
                    TRANSAKSI
                    
                </h1>


                <div class="card">
                    <h4 class="card-header"></h4>
                    <div class="card-body">
                        <ul>
                            
	
	
	<h3>EDIT DATA TRANSAKSI</h3>

	<?php
	
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

	$id_transaksi = $_GET['id_transaksi'];
    $data = mysqli_query($koneksi,"SELECT * from transaksi where id_transaksi='$id_transaksi'");
    
	while($d = mysqli_fetch_array($data)){
    ?>
        
		<form method="post" action="update_transaksi.php">
			<table>
				<tr>			
					<td>NAMA :</td>
					<td>
						<input type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                        
					</td>
                </tr><br>
                <tr>
                    
                    <td>TANGGAL :</td>
                   <td> <input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
                    
                </tr>
                <tr>
                        <td>BARANG :</td>
                        <td>
                        <select name="id_barang">
                        <option><?php echo $d['id_barang']; ?></option>
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","db_penjualan");
                        // Check connection
                        if (mysqli_connect_errno()){
                            echo "Koneksi database gagal : " . mysqli_connect_error();
                        }
                        $data = mysqli_query($koneksi,"SELECT * FROM barang ");
                        if(mysqli_num_rows($data) != 0){
                            while($row = mysqli_fetch_assoc($data)){
                                echo '<option>' .$row['id_barang']. '</option>';
                                
                            }
                        }
                        ?>
                        </select>
                        </td>
                    </tr>
								<tr>
					<td></td>
					<td><input type="submit" class="btn btn-success" name="update_transaksi" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

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