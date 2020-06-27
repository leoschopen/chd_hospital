<!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<title>CHD医院管理系统</title>
	 <link rel="shortcut icon" type="image/png" href="/chd_hospital/images/fav.png">
 	<!-- Bootstrap CSS -->
 	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
 	<!-- Font Awesome CSS-->
 	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
 	<!-- Line Awesome CSS -->
 	<link href="assets/css/line-awesome.min.css" rel="stylesheet">
 	<!-- Animate CSS-->
 	<link href="assets/css/animate.css" rel="stylesheet">
 	<!-- Bar Filler CSS -->
 	<link href="assets/css/barfiller.css" rel="stylesheet">
 	<!-- Magnific Popup Video -->
 	<link href="assets/css/magnific-popup.css" rel="stylesheet">
 	<!-- Flaticon CSS -->
 	<link href="assets/css/flaticon.css" rel="stylesheet">
 	<!-- Owl Carousel CSS -->
 	<link href="assets/css/owl.carousel.css" rel="stylesheet">
 	<!-- Style CSS -->
 	<link href="assets/css/style.css" rel="stylesheet">
 	<!-- Responsive CSS -->
 	<link href="assets/css/responsive.css" rel="stylesheet">

 	<!-- jquery -->
 	<script src="assets/js/jquery-1.12.4.min.js"></script>


 </head>

 <body>

 	<!-- Pre Loader -->

 	<div class="site-preloader-wrap">
 		<div class="spinner"></div>
 	</div>


 	<!-- Header Top Area -->

 	<div class="header-top-area">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-4 col-md-12 col-sm-12">
 					<div class="site-info">
 
 					</div>
 				</div>
 				<div class="col-lg-4 col-md-6 col-sm-12">
					 <p class="welcome-message">Welcome to the <b>CHD</b> 医院管理系统</p>
					 
 				</div>
 				<div class="col-lg-4 col-md-6 col-sm-12 text-right">
 					<div class="welcome-message">
					 <?php 
					 if(isset($_COOKIE['name'])){
						 echo "欢迎您！尊敬的".$_COOKIE['name'].$_COOKIE['occupation']; 
					 }else
					 echo "欢迎您，请登录！"
					 ?>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<!-- Header Area -->

 	<div class="header-area">
 		<div class="sticky-area">
 			<div class="navigation">
 				<div class="row">
 					<div class="col-lg-2">
 						<div class="logo">
 							<a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
 						</div>
 					</div>
 					<div class="col-lg-8">
 						<div class="main-menu">
 							<nav class="navbar navbar-expand-lg">
 								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 									<span class="navbar-toggler-icon"></span>
 									<span class="navbar-toggler-icon"></span>
 									<span class="navbar-toggler-icon"></span>
 								</button>

 								<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
 									<ul class="navbar-nav m-auto">
 										<li class="nav-item"><a class="nav-link" href="index_nurse.php">Home</a></li>
										 <li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-user"></span> 医生管理</a>
											<div class="dropdown-menu">
											<?php
							 if(isset($_COOKIE['name'])){
print<<<a
		<a class="dropdown-item" href="doctor.php">查询医生信息</a>
a;
							}else{
print<<<a
		<a class="dropdown-item " href="404.php">添加医生信息</a>
		<a class="dropdown-item" href="404.php">查询医生信息</a>
a;
							}
							 ?>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-user"></span> 护士管理</a>
											<div class="dropdown-menu">
											<?php
							 if(isset($_COOKIE['name'])){
print<<<a
<a class="dropdown-item" href="nurse.php">查询护士信息</a>
a;
							}else{
print<<<a
<a class="dropdown-item" href="404.php">添加护士信息</a>
<a class="dropdown-item" href="404">查询护士信息</a>
a;
							}
							 ?>

											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-wheelchair"></span> 病人管理</a>
											<div class="dropdown-menu">
											<?php
							 if(isset($_COOKIE['name'])){
print<<<a
<a class="dropdown-item" href="patient.php">查询病人信息</a>
a;
							}else{
print<<<a
<a class="dropdown-item" href="404.php">添加病人信息</a>
<a class="dropdown-item" href="404.php">查询病人信息</a>
a;
							}
							 ?>

											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-key"></span> 手术管理</a>
											<div class="dropdown-menu">
											<?php
							 if(isset($_COOKIE['name'])){
print<<<a
<a class="dropdown-item" href="surgey.php">查询手术信息</a>
a;
							}else{
print<<<a
<a class="dropdown-item" href="404.php">添加手术信息</a>
<a class="dropdown-item" href="404.php">查询手术信息</a>
a;
							}
							 ?>

											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-key"></span> 科室管理</a>
											<div class="dropdown-menu">
											<?php
							 if(isset($_COOKIE['name'])){
print<<<a
<a class="dropdown-item" href="keshi.php">查询科室信息</a>
a;
							}else{
print<<<a
<a class="dropdown-item" href="404.php">增加科室信息</a>
<a class="dropdown-item" href="404.php">查询科室信息</a>
a;
							}
							 ?>

											</div>
                                        </li>
                                        <li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-key"></span> 药品管理</a>
											<div class="dropdown-menu">
											<?php
							 if(isset($_COOKIE['name'])){
print<<<a
<a class="dropdown-item" href="medicine.php">查询药品信息</a>
a;
							}else{
print<<<a
<a class="dropdown-item" href="404.php">增加药品信息</a>
<a class="dropdown-item" href="404.php">查询药品信息</a>
a;
							}
							 ?>

											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											aria-expanded="false"><span class="ti-key"></span> 病房管理</a>
											<div class="dropdown-menu">
											<?php
							 if(isset($_COOKIE['name'])){
print<<<a

<a class="dropdown-item" href="bingfang.php">查询病房信息</a>
a;
							}else{
print<<<a
<a class="dropdown-item" href="404.php">增加病房信息</a>
<a class="dropdown-item" href="404.php">查询病房信息</a>
a;
							}
							 ?>
											</div>
										</li>
 									</ul>
 								</div>
 							</nav>
 						</div>
 					</div>
 					<div class="col-lg-2 text-right">
 						<div class="header-right-content ">
						 <?php
							 if(isset($_COOKIE['name'])){
print<<<a
								<a href="logout.php" class="main-btn">退出登录</a>
a;
							}else{
print<<<a
								<a href="login.html" class="main-btn">登录</a>
a;
							}
							 ?>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>