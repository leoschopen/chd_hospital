<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
$link = connect();
$sql = 'select * from nurse';
$result = execute_sql($link,$sql);
$num_pati = mysqli_num_rows($result);
include_once './inc/header.inc.nurse.php';
?>
				<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">护士管理</h3>
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
								<li class="breadcrumb-item">护士管理</li>
								<li class="breadcrumb-item active">All 护士管理</li>
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
							<h3 class="widget-title">护士管理 List</h3>							
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
											<th>护士 ID</th>
											<th>护士姓名</th>
											<th>病房ID</th>
											<th>年龄</th>
											<th>性别</th>											
											<th>学历</th>
											<th>工资</th>
											<th>用户密码</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>

<?php
$i = 0;
while($array=mysqli_fetch_assoc($result)){
	$url=encrypt_url("ID={$array['ID']}"."&time=".time(),$key_url_md_5);
	$decode ="del_nurse-act.php?{$url}";
	$decode2="edit_nurse.php?{$url}";
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
			<td>{$array['room_ID']}</td>
			<td>{$array['age']}</td>
			<td>{$array['sex']}</td>
			<td>{$array['education']}</td>
			<td>{$array['salary']}</td>
			<td>{$array['code']}</td>
			<td><a class="page-link" href="$decode2" target="_blank">修改</a><a class="page-link" href="$decode" target="_blank">删除</a></td>
		</tr>
a;
}
//如何一行显示
?>
																				
									</tbody>
								</table>
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
								<button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
								<button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
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