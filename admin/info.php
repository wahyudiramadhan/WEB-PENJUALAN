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
                  INFO PEMILIK
                    
                </h1>
               
                <div class="card">
                    <div class="card-body">
                    

<div class="container-fluid well span6">
	<div class="row-fluid bg-info rounded">
        <div class="span2" >
		  
        </div>
        
        <div class="span8 badge text-light text-left">
            <h3>Wahyudi ramadhan</h3>
            <h6>Email: yudir413@gmail.com</h6>
            <h6>politeknik negeri lhokseumawe</h6>  
        </div>
        
        
     
            </div>
        </div>
        <br>
        <div class="container-fluid well span6">
	<div class="row-fluid bg-info rounded">
        <div class="span2" >
          
        
        </div>
        
       
        <div class="span8 badge text-light text-left">
            <h3>naria sukma dewi</h3>
            <h6>Email: nariasukmadewi@gmails.com</h6>
            <h6>politeknik negeri lhokseumawe</h6>  
        </div>
        
     
            </div>
        </div>
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