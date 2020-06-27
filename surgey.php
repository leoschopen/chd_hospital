<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
$link = connect();
$sql = 'select * from operation';
$result = execute_sql($link,$sql);
$num_pati = mysqli_num_rows($result);
include_once './inc/header.inc.php';
?>
				<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">手术管理</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
								<?php
									if($_COOKIE['occupation']=="管理员")
									$link = "index.php";
									else if($_COOKIE['occupation']=="医生")
									$link = "index_doctor.php";
									else if($_COOKIE['occupation']=="护士")
									$link = "index_nurse.php";
									else
									$link = "#";
									?>
									<a  href="<?php echo $link;?>">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">手术管理</li>
								<li class="breadcrumb-item active">All 手术管理</li>
							</ol>
						</div>
					</div>
				</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 lochana-box-shadow">
							<h3 class="widget-title">手术管理 List</h3>							
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
											    <div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
											<th>手术 ID</th>
											<th>手术名</th>
											<th>病人 ID</th>
											<th>医生ID</th>
											<th>时间</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>

<?php
$i = 0;
while($array=mysqli_fetch_assoc($result)){
	$url=encrypt_url("ID={$array['ID']}"."&time=".time(),$key_url_md_5);
	$decode ="del_surgey-act.php?{$url}";
	$decode2="edit_surgey.php?{$url}";
$i=$i+1;
print<<<a
		<tr>
			<td>
				<div class="custom-control custom-checkbox">
					<input class="custom-control-input" type="checkbox" id="{$i}">
					<label class="custom-control-label" for="{$i}"></label>
				</div>
			</td>
			<td>{$array['ID']}</td>
			<td>{$array['Name']}</td>
			<td>{$array['bingren_ID']}</td>
			<td>{$array['doctor_ID']}</td>
			<td>{$array['time']}</td>
			<td><a class="page-link" href="$decode2" target="_blank">修改</a><a class="page-link" href="$decode" target="_blank">删除</a></td>
		</tr>
a;
}
//如何一行显示
?>
																				
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
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