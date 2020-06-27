
<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.php';
?>
<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">科室信息</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#" onClick="javascript:history.back(-1);">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">科室管理</li>
								<li class="breadcrumb-item active">添加科室信息</li>
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
							<h3 class="widget-title">添加科室信息</h3>
							<form action="/chd_hospital/add_keshi-act.php" method="post">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">科室名</label>
										<input type="text" class="form-control" placeholder="科室名" name="name">
									</div>
									<div class="form-group col-md-6">
										<label for="age">就诊费用</label>
										<input type="text" placeholder="费用" class="form-control"  name="fee">
									</div>
									<div class="form-group col-md-6">
										<label for="room-id">负责人</label>
										<input type="text" placeholder="负责人" class="form-control"  name="fzr">
									</div>
									<div class="form-group col-md-6">
										<label for="keshi-id">总床位数</label>
										<input type="text" placeholder="总床位数" class="form-control" name="sumbed">
									</div>
									<div class="form-group col-md-6">
										<label for="keshi-id">现有床位数</label>
										<input type="text" placeholder="现有床位数" class="form-control" name="nowbed">
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
										<button type="submit" class="btn btn-primary btn-lg">提交</button>
									</div>
								</div>
							</form>
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