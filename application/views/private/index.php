<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>tjsurvey : รายการแบบสำรวจข้อมูล</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link rel="stylesheet" href="<?php echo base_url() . 'css/menu.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . "js/css/cupertino/jquery-ui-1.9.2.custom.min.css" ?>">
        <link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>">        
        <link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">
    
	<link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />
    
    <link href="../assets/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.1/css/all.css" rel="stylesheet" />
	<link href="../assets/css/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/style.min.css" rel="stylesheet" />
	
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-1.12.3.js" ?>"></script>        
    <script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-ui-1.11.4.custom.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url() . "js/custom/app.custom.js" ?>"></script> 
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
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="<?= site_url('main/index') ?>" class="navbar-brand"><img src="../img/logo.png" class="logo" alt="" />สํานักงานกิจการยุติธรรม</a>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="hidden-xs"><?=$u_disp ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<? if($u_level == 'ADMIN'){ ?>
								<li><a href="<?= site_url('admin/addMember')?>">จัดการผู้ใช้งาน (User)</a></li>
							<?}?>
                            <li><a href="javascript:void(0)" class="item btn-form-logout" data-url="<?= site_url('main/submitLogout')?>">ออกจากระบบ</a></li>
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
			<div class="body">
			</br></br>
			<div style="float:right;">
			<a href="<?php echo base_url()."main/exportAll/"?>" class="ui green button " ><i class="share square icon small"></i>Export ข้อมูลแบบสำรวจ</a>
			</div>
							</br></br></br>
				<div  style="text-align: center;">
					<a href="<?= site_url('main/listSurveyAll') ?>">
						<div class="btn btn-lg btn-primary" style="width: 60%;">
							1. โครงการสำรวจข้อมูลสถิติอาชญากรรมภาคประชาชนและ</br>โครงการจัดเก็บข้อมูลตัวชี้วัดและวิเคราะห์สถานการณ์อาชญากรรม</br>และกระบวนการยุติธรรมของประเทศไทย
						</div>
					</a>
				</div>
				</br>
				<div style="text-align: center;">
					<a href="<?= site_url('main/listSurveySpecial') ?>">
						<div class="btn btn-lg btn-primary" style="width: 60%;">
							2. โครงการจัดเก็บข้อมูลตัวชี้วัดและวิเคราะห์สถานการณ์</br>อาชญากรรมและกระบวนการยุติธรรมของประเทศไทย
						</div>
					</a>
				</div>
			</div>
			</br></br>
		</div>
		<!-- end #content -->
		
	</div>
	<!-- end page container -->

	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/bootstrap/bootstrap-4.1.1/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/js/page-table-manage.demo.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->

    <script src="../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
			PageDemo.init();
		});

	</script>
</body>
</html>
