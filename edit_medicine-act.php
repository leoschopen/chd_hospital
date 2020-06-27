<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.php';
$url_info = geturl($_SERVER['QUERY_STRING'],$key_url_md_5);//接收所有参数
$id = $url_info['ID'];
$name = $_POST['name'];
$cost = $_POST['cost_price'];
$selling = $_POST['selling_price'];
$link = connect();
$sql = "UPDATE `medicine` SET `medicine_name` = '$name', `selling_price` = '$selling',`cost_price` = '$cost' WHERE `medicine`.`ID` = $id";
$rows=mysqli_affected_rows($link);
if((execute_sql($link,$sql))&&(($_COOKIE['occupation']=="管理员")||($_COOKIE['occupation']=="医生"))){
print<<<A
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="widget-area-2 lochana-box-shadow">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Successfully Done!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
			</div>
		</div>
A;
}else{
print<<<A
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="widget-area-2 lochana-box-shadow">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>无权限!</strong> 你没有足够的权限来进行此操作
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
			</div>
		</div>
A;
}
?>
			<div class="container">
				<div class="d-sm-flex justify-content-center">
				  <span class="text-muted text-center d-block d-sm-inline-block">Copyright © 2020 <a href="#" target="_blank">Leo WeikeCai</a>. All rights reserved.
				</div>
			</div>
			<!-- /Copy Rights-->
		</div>
		<!-- /Page Content -->
    </div>
<?php
include_once './inc/footer.inc.php';
?>