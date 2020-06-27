<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CHD医院管理系统</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="/chd_hospital/images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="/chd_hospital/css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="/chd_hospital/css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="/chd_hospital/css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="/chd_hospital/css/styles.css">
	<link rel="stylesheet" href="/chd_hospital/css/green.css" id="style_theme">
	<link rel="stylesheet" href="/chd_hospital/css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="/chd_hospital/charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="/chd_hospital/css/jquery-jvectormap.css">
	<link rel="stylesheet" href="/chd_hospital/datatable/dataTables.bootstrap4.min.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>

	<div class="wrapper">		
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<div class="container top-brand">
				<nav class="navbar navbar-default">			
					<div class="navbar-header">
					<?php
									if(!isset($_COOKIE['occupation']))
									$link = "#";
									else if($_COOKIE['occupation']=="管理员")
									$link = "index.php";
									else if($_COOKIE['occupation']=="医生")
									$link = "index_doctor.php";
									else if($_COOKIE['occupation']=="护士")
									$link = "index_nurse.php";
									else
									$link = "#";
					?>
						<div class="sidebar-header"> <a  href="<?php echo $link;?>"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
						</div>
					</div>
					<ul class="nav justify-content-end">
						<li class="nav-item">
							<a class="nav-link">
								<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
							</a>							
						</li>
					</ul>
			
				</nav>
			</div>
			<!-- /Top Navigation -->
			
			