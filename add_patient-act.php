<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.php';
$name = $_POST["patient-name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$roomid= $_POST["room-id"];
$keshi_id= $_POST["keshi-id"];
$doctor_id = $_POST["doctor-id"];
$symptom = $_POST["symptom"];
$link = connect();
$sql = "insert into bingren(name,age,sex,symptom,room_id,keshi_id,doctor_id) 
        values('$name',$age,'$gender','$symptom',$roomid,$keshi_id,$doctor_id)";
		$result = execute_sql($link,$sql);
		$rows=mysqli_affected_rows($link);
if(($rows==1)&&(($_COOKIE['occupation']=="管理员")||($_COOKIE['occupation']=="医生"))){
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