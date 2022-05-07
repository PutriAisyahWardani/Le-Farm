<?php
require('connection.inc.php');
require('functions.inc.php');

if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  
				  <li class="menu-item-has-children dropdown">
                     <a href="product.php" > Product </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <?php 
					 if($_SESSION['ADMIN_ROLE']==1){
						echo '<a href="order_master_vendor.php" > Pesanan </a>';
					 }else{
						echo '<a href="order_master.php" > Pesanan </a>';
					 }
					 ?>
					 
					 
                  </li>
				  <?php if($_SESSION['ADMIN_ROLE']!=1){?>
				  <li class="menu-item-has-children dropdown">
                     <a href="product_review.php" > Review</a>
                  </li>
				  <!--<li class="menu-item-has-children dropdown">
                     <a href="color.php" > Color Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="size.php" > Size Master</a>-->
                  </li>
				  <!--<li class="menu-item-has-children dropdown">
                     <a href="banner.php" > Banner</a>
                  </li>-->
				   <li class="menu-item-has-children dropdown">
                     <a href="vendor_management.php" > Mitra</a>
                  </li>
				  <!--<li class="menu-item-has-children dropdown">
                     <a href="categories.php" > Kategori </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="sub_categories.php" > Sub Kategori</a>
                  </li>-->
                  
				  <li class="menu-item-has-children dropdown">
                     <a href="users.php" > Customer </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                 <!--<a href="income.php"></i>Pendapatan</a>-->
                 <a href="income.php" > Pendapatan </a>
               </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="contact_us.php" > Kontak </a>
                  </li>
                  
                
                    <div class="row">
                        
                           <?php

                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];

                        if($page == "masuk") {
                            if($aksi =="") {
                                include 'income.php';
                            } if($aksi =="hapus") {
                                include 'delete_income.php';
                            }
                        }                       
                     ?>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
				   
				  <?php } ?>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="admin/images/logo.png" alt="Logo"></a>
                  <!--<a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>-->
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['ADMIN_USERNAME']?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
<body>

            <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
</body>