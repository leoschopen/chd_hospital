<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.php';
?>
			<!-- Page Title -->
			<div class="container mt-0">
				<div class="row breadcrumb-bar">
					<div class="col-md-6">
						<h3 class="block-title">404 Page</h3>
					</div>
					<div class="col-md-6">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">
									<span class="ti-home"></span>
								</a>
							</li>
							<li class="breadcrumb-item active">404 Page</li>
						</ol>
					</div>
				</div>
			</div>
			<!-- /Page Title -->
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">				
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 lochana-box-shadow min-h200">
							<?php
							if(!isset($_COOKIE['occupation'])){
print<<<a
							<h3 class="widget-title">您还未登录，3秒后将自动跳转至登录界面</h3>
							<meta http-equiv="refresh" content="3;url=login.html">
a;								
							}else{
print<<<a
							<h3 class="widget-title">Page Not Found</h3>
a;	
							}
							?>

							<div class="text-center">
								<span class="ti-unlink unlink"></span>
							</div>
						</div>
					</div>
				</div>


			</div>
			<!-- /Main Content -->
			<!--Copy Rights-->
			<div class="container">
				<div class="d-sm-flex justify-content-center">
				<span class="text-muted text-center d-block d-sm-inline-block">Copyright © 2020 <a href="#" target="_blank">Leo WeikeCai</a>. All rights reserved.
				</div>
			</div>
			<!-- /Copy Rights-->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<!-- Back to Top -->
<?php
include_once './inc/footer.inc.php';
?>