<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>tjsurvey : แบบสำรวจข้อมูลสถิติอาชญากรรมภาคประชาชน</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="stylesheet" href="<?php echo base_url() . 'css/formSurvey.css?ts=' . time() ?>">
	<link rel="stylesheet" href="<?php echo base_url() . "js/css/cupertino/jquery-ui-1.9.2.custom.min.css" ?>">
	<link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">

	<link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />

	<link href="<?php echo base_url() . 'assets/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css?ts=' . time() ?>" rel='stylesheet' />
	<link href="<?php echo base_url() . 'assets/css/animate.min.css'  ?>" rel='stylesheet' />
	<link href="<?php echo base_url() . 'assets/css/style.min.css?ts=' . time()  ?>" rel='stylesheet' />
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-1.12.3.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-ui-1.11.4.custom.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'js/custom/app.custom.js?ts=' . time() ?>"></script>
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->

	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<!-- ================== END BASE JS ================== -->

	<!--[if lt IE 9]>
	    <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer page-without-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top ">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="<?= site_url('main/index') ?>" class="navbar-brand"><img src="<?php echo base_url() . '/img/logo.png' ?>" class="logo" alt="" />สํานักงานกิจการยุติธรรม</a>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="hidden-xs"><?= $u_disp ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<? if ($u_level == 'ADMIN') { ?>
								<li><a href="<?= site_url('admin/addMember') ?>">จัดการผู้ใช้งาน (User)</a></li>
							<? } ?>
							<li><a href="javascript:void(0)" class="item btn-form-logout" data-url="<?= site_url('main/submitLogout') ?>">ออกจากระบบ</a></li>
						</ul>
					</li>
				</ul>
				<!-- end navbar-right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		</a>
		<!-- begin #content -->
		<div class="panel container" style="margin-top : 10px;">
			<h1 class="page-header" style="margin-top : 10px;">แบบสำรวจข้อมูลสถิติอาชญากรรมภาคประชาชน</h1>
			<div class="body">
			</br></br>
			</br></br></br>
					<div style="text-align: center;">
						<a href="<?= site_url('main/surveyA/') ?>">
							<div class="btn btn-lg btn-primary" style="width: 60%;">
								ผนวก ก แบบเก็บข้อมูลบุคคล
							</div>
						</a>
					</div>
					</br>

					<div style="text-align: center;">
						<a href="<?= site_url('main/surveyB/') ?>">
							<div class="btn btn-lg btn-primary" style="width: 60%;">
								ผนวก ข แบบแจงนับข้อมูลสถิติอาชญากรรม
							</div>
						</a>
					</div>
					</br>

					<div style="text-align: center;">
						<a href="<?= site_url('main/surveyC/') ?>">
							<div class="btn btn-lg btn-primary" style="width: 60%;">
								ผนวก ค ความรู้สึกหวาดกลัวภัยอาชญากรรม
							</div>
						</a>
					</div>
					</br>

					<div style="text-align: center;">
						<a href="<?= site_url('main/surveyD/') ?>">
							<div class="btn btn-lg btn-primary" style="width: 60%;">
							ผนวก ง สำรวจการติดสินบน
							</div>
						</a>
					</div>
					</br>

					<div style="text-align: center;">
						<a href="<?= site_url('main/surveyE/') ?>">
							<div class="btn btn-lg btn-primary" style="width: 60%;">
							ผนวก จ การค้ามนุษย์เพื่อบังคับใช้แรงงาน
							</div>
						</a>
					</div>
					</br>

					<div style="text-align: center;">
						<a href="<?= site_url('main/surveyF/') ?>">
							<div class="btn btn-lg btn-primary" style="width: 60%;">
							ผนวก ฉ การทำร้ายรังแกทางจิตใจ
							</div>
						</a>
					</div>
					</br>

					<div style="text-align: center;">
						<a href="<?= site_url('main/surveyG/') ?>">
							<div class="btn btn-lg btn-primary" style="width: 60%;">
							ผนวก ช ถูกกระทำความรุนแรงทางเพศ
							</div>
						</a>
					</div>
					</br>


			</div>
		</div>
		<!-- end #content -->

	</div>
	<!-- end page container -->



	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url() . '/assets/plugins/bootstrap/bootstrap-4.1.1/js/bootstrap.bundle.min.js' ?>"></script>

	<script src="<?php echo base_url() . '/assets/plugins/slimscroll/jquery.slimscroll.min.js' ?>"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url() . '/assets/plugins/parsley/dist/parsley.js' ?>"></script>

	<script src="<?php echo base_url() . '/assets/js/apps.min.js' ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});



		function maxLengthCheck(object) {
			if (object.value.length > object.maxLength)
				object.value = object.value.slice(0, object.maxLength)
		}

		function checkId(id) {
			if (id != null) {
				id.checked = true;
			}
		};

		function checkIdnCheckBOX(id, value) {
			if (id != null) {
				if (value == 1) {
					id.checked = true;
				}
			}
		};

		$('input[type="radio"]').mousedown(function() {
			// if it was checked before
			if (this.checked) {
				// bind event to reset state after click is completed
				$(this).mouseup(function() {
					// bind param, because "this" will point somewhere else in setTimeout
					var radio = this;
					// apparently if you do it immediatelly, it will be overriden, hence wait a tiny bit
					setTimeout(function() {
						radio.checked = false;
					}, 5);
					// don't handle mouseup anymore unless bound again
					$(this).unbind('mouseup');
				});
			}
		});
	</script>
</body>

</html>