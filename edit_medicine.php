<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header.inc.php';
$url_info = geturl($_SERVER['QUERY_STRING'],$key_url_md_5);//接收所有参数
$id = $url_info['ID'];
$link = connect();
$sql = "select * from medicine where id={$id}";
$result = execute_sql($link,$sql);
$array = mysqli_fetch_assoc($result);
$url=encrypt_url("ID={$array['ID']}"."&time=".time(),$key_url_md_5);
$edit_act_code = "edit_keshi-act.php?{$url}";
?>
<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">修改药品信息</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#" onClick="javascript:history.back(-1);">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">药品管理</li>
								<li class="breadcrumb-item active">修改药品信息</li>
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
							<h3 class="widget-title">修改药品信息</h3>
							<form action="<?php echo $edit_act_code ?>" method="post">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">药品名</label>
										<input type="text" class="form-control" placeholder="<?php echo $array['medicine_name'] ?>" name="name" value="<?php echo $array['medicine_name'] ?>">
									</div>
									<div class="form-group col-md-6">
										<label for="age">药品进价</label>
										<input type="text" placeholder="<?php echo $array['cost_price'] ?>" class="form-control" name="cost_price" value="<?php echo $array['cost_price'] ?>">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">药品售价</label>
                                        <input type="text" placeholder="<?php echo $array['selling_price'] ?>" class="form-control" name="selling_price" value="<?php echo $array['selling_price'] ?>">
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
										<button type="submit" class="btn btn-primary btn-lg">提交</button>
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