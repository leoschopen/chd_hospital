<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.php';
session_start();

if (isset($_SESSION['name'])) {
	session_unset();//Free all session variables
	session_destroy();//销毁一个会话中的全部数据
	setcookie(session_name(),'',time()-3600,'/');//销毁保存在客户端的卡号（session id）
    setcookie('name',null,time()-3600);
    setcookie('pw',null,time()-3600);
    setcookie('occupation',"",time()-3600);
}
?>
			<!-- Page Title -->
			<div class="container mt-0">
				<div class="row breadcrumb-bar">
					<div class="col-md-6">
						<h3 class="block-title">退出登录</h3>
					</div>
					<div class="col-md-6">
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
							<h3 class="widget-title">退出成功！3秒后将自动跳转至登录界面</h3>
							<meta http-equiv="refresh" content="3;url=login.html">
a;								
							}else{
print<<<a
                            <h3 class="widget-title">Page Not Found</h3>
                            <meta http-equiv="refresh" content="0.5">
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
