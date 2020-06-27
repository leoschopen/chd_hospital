<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.php';
$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$code= $_POST["code"];
$room_id= $_POST["room-id"];
$edu = $_POST["education"];
$salary = $_POST["salary"];
$link = connect();
$sql = "insert into nurse(ID,Name,age,sex,code,room_ID,education,salary) 
        values(id,'$name',$age,'$gender',$code,$room_id,'$edu',$salary)";
$result = execute_sql($link,$sql);
$rows=mysqli_affected_rows($link);
if(($rows==1)&&($_COOKIE['occupation']=="管理员")){
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