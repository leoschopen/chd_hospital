
<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.doctor.php';
?>
<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">添加医生信息</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#" onClick="javascript:history.back(-1);">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">医生管理</li>
								<li class="breadcrumb-item active">添加医生信息</li>
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
							<h3 class="widget-title">添加医生信息</h3>
							<form action="/chd_hospital/add_doctor-act.php" method="post">
								<div class="form-row">
								    <div class="form-group col-md-6">
										<label for="doctor-id">ID/工号</label>
										<input type="text" class="form-control" placeholder="ID/工号" name="id">
									</div>
									<div class="form-group col-md-6">
										<label for="doctor-name">姓名</label>
										<input type="text" class="form-control" placeholder="姓名" name="name">
									</div>
									<div class="form-group col-md-6">
										<label for="age">年龄</label>
										<input type="text" placeholder="年龄" class="form-control"  name="age">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">性别</label>
										<select class="form-control" name="gender">
											<option>男</option>
											<option>女</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="room-id">密码</label>
										<input type="text" placeholder="密码" class="form-control"  name="code">
									</div>
									<div class="form-group col-md-6">
										<label for="keshi-id">科室号</label>
										<input type="text" placeholder="科室号" class="form-control" name="keshi-id">
									</div>
									<div class="form-group col-md-6">
										<label for="edu">学历</label>
										<input type="text" placeholder="学历" class="form-control" name="education">
									</div>
									<div class="form-group col-md-6">
										<label for="salary">工资</label>
										<input type="text" placeholder="工资" class="form-control" name="salary">
									</div>
									<div class="form-group col-md-6">
										<label for="description">简介</label>
										<input type="text" placeholder="简介" class="form-control" name="description">
									</div>
									<div class="form-group col-md-12">
										<label for="file">File</label>
										<input type="file" class="form-control" id="file">
									</div>
																		
									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" id="ex-check-2">
												<label class="custom-control-label" for="ex-check-2">请确认</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<input type="submit" value="确定">
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>成功!</strong> 
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>出错了!</strong>重新确认所填信息！
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div> -->
							<!-- /Alerts-->
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
<?php
include_once './inc/footer.inc.php';
?>