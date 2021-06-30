<?php
	  $_SESSION["ses_level"] = "Administrator";
	  $_SESSION["ses_id"] = "1";
	  $_SESSION["ses_nama"] = "Marco Roland Dio Yanwar";
	  $_SESSION["ses_username"] = "admin";
	  
	  
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
    

    //KONEKSI DB
	include "inc/koneksi.php";
	
	$sql = $koneksi->query("SELECT * from pelanggan");
	while ($data= $sql->fetch_assoc()) {
	
	$nama=$data['nama_pelanggan'];
	}

	include "inc/koneksi.php";
	
	$sql = $koneksi->query("SELECT * from salesman");
	while ($data= $sql->fetch_assoc()) {
	
	$nama=$data['nama_salesman'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Pelanggan</title>
	<title>Data Salesman</title>
	<title>Data Produk</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>

</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>



			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>

							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text">DATA PENJUALAN</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/user.png" class="img-circle elevation-1" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level=="Administrator"){
						?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>


						<li class="nav-item">
							<a href="?page=data-pelanggan" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Pelanggan
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-salesman" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Salesman
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-produk" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Produk
								</p>
							</a>
						</li>

						<li class="nav-header">Setting</li>
						<li class="nav-item">
							<a href="?page=data-profil" class="nav-link">
								<i class="nav-icon far fa fa-flag"></i>
								<p>
									Profil Perusahaan
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Pengguna Sistem
								</p>
							</a>
						</li>

						<?php
          				} elseif($data_level=="Sekretaris"){
          				?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pelanggan" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Pelanggan
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-salesman" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Salesman
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-produk" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Produk
								</p>
							</a>
						</li>


						<li class="nav-header">Setting</li>

						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              	case 'admin':
                  include "home/admin.php";
                  break;
				

				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;

				//Asrama

				case 'data-pelanggan':
					include "admin/pelanggan/data_pelanggan.php";
					break;
				case 'add-pelanggan':
					include "admin/pelanggan/add_pelanggan.php";
					break;
				case 'edit-pelanggan':
					include "admin/pelanggan/edit_pelanggan.php";
					break;
				case 'del-pelanggan':
					include "admin/pelanggan/del_pelanggan.php";
					break;
				case 'view-pelanggan':
					include "admin/pelanggan/view_pelanggan.php";
					break;

				case 'data-salesman':
					include "admin/salesman/data_salesman.php";
					break;
				case 'add-salesman':
					include "admin/salesman/add_salesman.php";
					break;
				case 'edit-salesman':
					include "admin/salesman/edit_salesman.php";
					break;
				case 'del-salesman':
					include "admin/salesman/del_salesman.php";
					break;
				case 'view-salesman':
					include "admin/salesman/view_salesman.php";
					break;

				case 'data-produk':
					include "admin/produk/data_produk.php";
					break;
				case 'add-produk':
					include "admin/produk/add_produk.php";
					break;
				case 'edit-produk':
					include "admin/produk/edit_produk.php";
					break;
				case 'del-produk':
					include "admin/produk/del_produk.php";
					break;
				case 'view-produk':
					include "admin/produk/view_produk.php";
					break;
					
				//Profil
				case 'data-profil':
					include "admin/profil/data_profil.php";
					break;
				case 'edit-profil':
					include "admin/profil/edit_profil.php";
					break;

			
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
         
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="https://www.youtube.com/channel/UCDxjOzW7F0JOkltlXT6g7AQ">
					<strong> elseif software house</strong>
				</a>
				All rights reserved.
			</div>
			<b>Created 2020</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>