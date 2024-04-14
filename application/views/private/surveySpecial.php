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
	<link rel="stylesheet" href="<?php echo base_url() . 'css/formSurvey.css?ts='.time()?>">
	<link rel="stylesheet" href="<?php echo base_url() . "js/css/cupertino/jquery-ui-1.9.2.custom.min.css" ?>">
	<link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">

	<link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />

	<link href="<?php echo base_url() . 'assets/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css?ts='.time()?>" rel='stylesheet' />
	<link href="<?php echo base_url() . 'assets/css/animate.min.css'  ?>" rel='stylesheet' />
	<link href="<?php echo base_url() . 'assets/css/style.min.css?ts='.time()  ?>" rel='stylesheet' />
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-1.12.3.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-ui-1.11.4.custom.js" ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'js/custom/app.custom.js?ts='.time() ?>"></script>
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
			<h1 class="page-header" style="margin-top : 10px;">แบบสำรวจตัวชี้วัดและวิเคราะห์สถานการณ์อาชญากรรมและกระบวนการยุติธรรมของประเทศไทย</h1>
			<div class="body">
				<form class="a form app form-horizontal" id="form-data-varidate" data-parsley-errors-messages-disabled data-parsley-inputs="input:not([type='checkbox']), textarea, select" method="post">
					<div class="container" style="text-align: right;">
						<div class="line">
							<label for="2" class="col-form-label nText">ผู้สำรวจ</label>
							<div class="col-lg-3">
								<input type="text" class="form-control" name="user_text" value="<?= $user_name_sur ?>" readonly />
							</div>
						</div>
						</br>
						<div class="line">
							<label for="2" class="col-form-label nText">แบบสำรวจลำดับที่</label>
							<div class="col-lg-2">
								<input type="hidden" name="1_text" value="<?= $u_now_id ?>" readonly />
								<input type="text" class="form-control" name="2_text" value="<?= $u_profile_code ?>" readonly />
							</div>
						</div>
					</div>

					<label for="wight">ส่วนที่ 1 ข้อมูลเกี่ยวกับผู้ตอบแบบสอบถาม</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
								<label for="A1" class="col-form-label">A1 ข้อมูลส่วนบุคคล</label></br>
							</div>
							<div class="row indent">
								<label for="A2" class="col-form-label nText col-lg-2">A2 บ้านเลขที่<span class="star"> *</span></label>
								<div class="col-lg-2 ">
									<input type="text" class="form-control" id="A2" name="A2" data-parsley-required="true" />
								</div>
							</div>
							<div class="row indent">
								<label for="A3" class="col-form-label nText col-lg-2">A3 พิกัดบ้าน (NS) (EW)<span class="star"> *</span></label>
								<div class="col-lg-2 ">
									<input type="text" class="form-control" id="A3" name="A3" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">
								<label for="A1" class="nText">หมายเหตุ : ข้อมูลที่จัดเก็บจากการสำรวจครั้งนี้จะถูกเก็บไว้เป็นความลับ และถูกนำมาใช้วิเคราะห์ในภาพรวมเพื่อประโยชน์สำหรับการดำเนินงานของสำนักงานกิจการยุติธรรม กระทรวงยุติธรรม เท่านั้น</label></br>
							</div>

							<div class="row">
								<label for="A4" class="col-form-label">A4 พื้นที่<span class="star"> *</span></label>
								<div class="col-lg-12">
									<div style="width: 50%; float:left;">
										<div class="row" style="margin-left: 10px; padding-top: 13px;">
											<input type="radio" id="A41" name="A4" value="1" data-parsley-required="true">
											<label class="radio-inline " style="align-self: center;">(A4.1) กรุงเทพมหานคร</label>
										</div>
										<div class="row" style=" padding-top: 13px;">
											<label class="radio-inline col-lg-3" style="align-self: center; margin-left: 40px;">เขต<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="amphure_id_1" id="amphure_1" class="form-control" disabled>
													<option value="">เลือกเขต</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline col-lg-3" style="align-self: center; margin-left: 40px;">แขวง<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="district_id_1" id="district_1" class="form-control" disabled>
													<option value="">เลือกแขวง</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline col-lg-3" style="align-self: center; margin-left: 40px;">เขตสถานีตำรวจ<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" id="A4_41" name="A4_1_text_3" data-parsley-required="true"  readonly />
											</label>
										</div>
									</div>

									<div style="width: 50%; float:right;">
										<div class="row" style="margin-left: 10px;">
											<input type="radio" id="A42" name="A4" value="2">
											<label class="radio-inline col-lg-4" style="align-self: center;">(A4.2) จังหวัดอื่นๆ (ระบุ)</label>
										</div>
										<div class="row" >
											<label class="radio-inline col-lg-45" style="align-self: center; margin-left: 30px;">จังหวัด<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="province_id" id="province" class="form-control" disabled>
													<option value="">เลือกจังหวัด</option>
													<? foreach ($d_province as $result) { ?>
														<? if($result->name_th != 'กรุงเทพมหานคร'){ ?>
														<option value="<?= $result->name_th ?>"><?= $result->name_th ?></option>
													<? }} ?>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline col-lg-45" style="align-self: center; margin-left: 30px;">อำเภอ<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="amphure_id" id="amphure" class="form-control" disabled>
													<option value="">เลือกอำเภอ</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline col-lg-45" style="align-self: center; margin-left: 30px;">ตำบล<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="district_id" id="district" class="form-control" disabled>
													<option value="">เลือกตำบล</option>
												</select>
											</label>
										</div>
										<div class="row">
											<label class="radio-inline col-lg-45" style="align-self: center; margin-left: 30px;">เขตสถานีตำรวจ<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" id="A4_42" name="A4_2_text_4" data-parsley-required="true" readonly />
											</label>
										</div>
										<div class="row">
											<label class="radio-inline col-lg-45" style="align-self: center; margin-left: 30px;">อบต./ท.ตำบล/ท.เมือง/ท.นคร<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<input type="text" class="form-control" id="A4_52" name="A4_2_text_5" data-parsley-required="true" readonly />
											</label>
										</div>
									</div>

								</div>
							</div>


							<label for="wight">1.1 ข้อมูลบุคคลของผู้ตอบแบบสอบถาม (ผู้แทนครัวเรือน)</label>

							<div class="row">
								<label for="1111" class="col-form-label">1.1.1 เพศ<span class="star"> * </span> &nbsp</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11111" class="" name="1_1_1" value="1" data-parsley-required="true"> (1) ชาย
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11112" name="1_1_1" value="2"> (2) หญิง
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="11113" name="1_1_1" value="3"> (3) เพศทางเลือก
								</label>
							</div>

							<div class="row">
								<label for="1112" class="col-form-label">1.1.2 อายุ<span class="star"> *</span></label>
								<div class="col-lg-1">
									<input type="number" class="form-control" oninput="maxLengthCheck(this)" maxlength = "3" id="1112" name="1_1_2" data-parsley-required="true"/>
								</div>
								<div class="col-form-label inputTextFix">
									ปี (เต็มปีบริบูรณ์)
								</div>
							</div>

							<div class="row">
								<label for="1113" class="col-form-label">1.1.3 รายได้<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11131" name="1_1_3" value="1" data-parsley-required="true"> (1) ไม่เกิน 15,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11132" name="1_1_3" value="2"> (2) 15,001-25,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11133" name="1_1_3" value="3"> (3) 25,001-35,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11134" name="1_1_3" value="4"> (4) 35,001-45,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11135" name="1_1_3" value="5"> (5) 45,001-55,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11136" name="1_1_3" value="6"> (6) 55,001-65,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11137" name="1_1_3" value="7"> (7) 65,001-75,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11138" name="1_1_3" value="8"> (8) มากกว่า 75,000 บาท
									</label>
								</div>
							</div>

							<div class="row">
								<label for="1114" class="col-form-label">1.1.4 อาชีพ<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11141" name="1_1_4" value="1" data-parsley-required="true"> (1) ข้าราชการ พนักงานรัฐวิสาหกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11142" name="1_1_4" value="2"> (2) พนักงานเอกชน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11143" name="1_1_4" value="3"> (3) นักเรียน/นักศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11144" name="1_1_4" value="4"> (4) รับจ้างทั่วไป
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11145" name="1_1_4" value="5"> (5) เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11146" name="1_1_4" value="6"> (6) ประกอบธุรกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11147" name="1_1_4" value="7"> (7) ไม่ได้ประกอบอาชีพ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11148" name="1_1_4" value="8"> (8) อื่น ๆ...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="1114_text" name="1_1_4_text" data-parsley-required="true" readonly />
								</div>
							</div>

							<div class="row">
								<label for="1115" class="col-form-label">1.1.5 การศึกษาระดับสูงสุด<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11151" name="1_1_5" value="1" data-parsley-required="true"> (1) ไม่เคยเข้ารับการศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11152" name="1_1_5" value="2"> (2) การศึกษานอกระบบ (กศน.)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11153" name="1_1_5" value="3"> (3) ประถมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11154" name="1_1_5" value="4"> (4) มัธยมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11155" name="1_1_5" value="5"> (5) ปวช.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11156" name="1_1_5" value="6"> (6) ปวส.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11157" name="1_1_5" value="7"> (7) ปริญญาตรี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11158" name="1_1_5" value="8"> (8) ปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11159" name="1_1_5" value="9"> (9) สูงกว่าปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="111510" name="1_1_5" value="10"> (10) การศึกษาในรูปแบบอื่น...
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="1115_text" name="1_1_5_text" data-parsley-required="true" readonly />
								</div>
							</div>

							<div class="row">
								<label for="1116" class="col-form-label">1.1.6 ท่านเห็นการปฏิบัติงานของเจ้าหน้าที่ตำรวจ หรือเจ้าหน้าที่ของหน่วยงานด้านยุติธรรม </br>เช่น เจ้าหน้าที่คุมประพฤติ เจ้าหน้าที่ราชทัณฑ์ เจ้าหน้าที่ยุติธรรมจังหวัด เจ้าหน้าที่ยุติธรรมชุมชน เป็นต้น </br>ในการปฏิบัติงานในพื้นที่ชุมชนของท่านมากน้อยเพียงใด<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11161" name="1_1_6" value="1" data-parsley-required="true"> (1) สัปดาห์ละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11162" name="1_1_6" value="2"> (2) เดือนละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11163" name="1_1_6" value="3"> (3) ปีละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11164" name="1_1_6" value="4"> (4) มากกว่า 1 ครั้ง/ปี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11165" name="1_1_6" value="5"> (5) ไม่เคยพบ
									</label>
								</div>
							</div>

							<div class="row">
								<label for="1117" class="col-form-label">1.1.7 ในช่วงระยะเวลา 5 ปี ท่านเคยมาติดต่อหรือรับบริการจากหน่วยงานในกระบวนการยุติธรรม หรือไม่<span class="star"> *</span>
								<div class="col-lg-12">
									<label class="radio-inline" style="align-self: center; margin-left: 10px;">
										<input type="radio" id="11171" name="1_1_7" value="1" data-parsley-required="true"> (1) เคย กรุณาระบุหน่วยงาน 
									</label>

									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C1" name="1_1_7_C1" value="1" disabled> (1) สำนักงานศาลยุติธรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C2" name="1_1_7_C2" value="1" disabled> (2) สำนักงานอัยการสูงสุด
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C3" name="1_1_7_C3" value="1" disabled> (3) สำนักงานตำรวจแห่งชาติ
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C4" name="1_1_7_C4" value="1" disabled> (4) กรมคุมประพฤติ 
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C5" name="1_1_7_C5" value="1" disabled> (5) กรมพินิจและคุ้มครองเด็กและเยาวชน 
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C6" name="1_1_7_C6" value="1" disabled> (6) กรมราชทัณฑ์
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C7" name="1_1_7_C7" value="1" disabled> (7) กรมคุ้มครองสิทธิและเสรีภาพ
									</label>
									<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
										<input type="checkbox" id="11171C8" name="1_1_7_C8" value="1" disabled> (8) กรมสอบสวนคดีพิเศษ
									</label>
									<label class="col-form-label col-lg-12" style="margin-left: -5px;">
										<label class="radio-inline" style="align-self: center;">
											<input type="checkbox" id="11171C9" name="1_1_7_C9" value="1" disabled> (9) อื่นๆ โปรดระบุ
										</label>
										<label class="radio-inline col-form-label  col-lg-8">
											<input type="text" class="form-control" id="11171C9_text" name="1_1_7_C9_text" style="line-height: 4;" data-parsley-required="false" readonly />
										</label>
									</label>

									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11172" name="1_1_7" value="2"> (2) ไม่เคย 
									</label>
								</div>
							</div>

							<div class="row" style="margin-left: 10px;">
								<label for="11171" class="col-form-label">1.1.7.1 ท่านเคยมาติดต่อหรือรับบริการจากหน่วยงานในกระบวนการยุติธรรมในสถานะใด<span class="star"> *</span>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label" style="margin-left: 10px;">
										<input type="radio" id="1117_11" name="1_1_7_1" value="1" data-parsley-required="true" disabled> (1) ผู้มาติดต่อหรือรับบริการโดยตรง ได้แก่ ผู้เสียหาย ผู้กระทำผิด
									</label>
									<label class="radio-inline col-form-label  col-lg-12">
										<input type="radio" id="1117_12" name="1_1_7_1" value="2" disabled> (2) ผู้มาติดต่อหรือรับบริการโดยอ้อม ได้แก่ ญาติ ผู้เกี่ยวข้องกับผู้เสียหายหรือผู้กระทำผิด 
									</label>
								</div>
							</div>


							</br>
							<div class="row">
								<label for="112" class="col-form-label">1.2 สถานะของท่านในครัวเรือน (ท่านมีความเกี่ยวข้องสัมพันธ์กับเจ้าของบ้านอย่างไร)<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="1121" name="1_2" value="1" data-parsley-required="true"> (1) เจ้าของบ้าน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1122" name="1_2" value="2"> (2) คู่สมรส
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1123" name="1_2" value="3"> (3) บิดามารดา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1124" name="1_2" value="4"> (4) บุตร
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1125" name="1_2" value="5"> (5) ปู่/ย่า/ตา/ยาย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1126" name="1_2" value="6"> (6) หลาน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1127" name="1_2" value="7"> (7) พี่/น้อง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1128" name="1_2" value="8"> (8) ลุง/ป้า/น้า/อา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="1129" name="1_2" value="9"> (9) อื่นๆ...
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="112_text" name="1_2_text" data-parsley-required="true" readonly />
								</div>
							</div>


							<div class="row">
								<label for="113" class="col-form-label">1.3 ลักษณะบริเวณที่อยู่อาศัย<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-8" style="margin-left: 10px;">
										<input type="radio" id="1131" name="1_3" value="1" data-parsley-required="true"> (1) หมู่บ้าน/บ้านจัดสรร (มี รปภ.)
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1132" name="1_3" value="2"> (2) หมู่บ้าน/บ้านจัดสรร (ไม่มี รปภ.)
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1133" name="1_3" value="3"> (3) ที่พักอาศัยในเขตเมือง
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1134" name="1_3" value="4"> (4) ที่พักอาศัยในชนบท
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1135" name="1_3" value="5"> (5) ชุมชนแออัด
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1136" name="1_3" value="6"> (6) ย่านการค้า/ธุรกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1137" name="1_3" value="7"> (7) เขตอุตสาหกรรม (หรือชุมชนที่อยู่ใกล้โรงงานอุตสาหกรรมหรือนิคมอุตสาหกรรม)
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1138" name="1_3" value="8"> (8) เขตเกษตรกร หรือชุมชนที่อยู่ในบริเวณพื้นที่เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="1139" name="1_3" value="9"> (9) ชุมชนประมง
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="11310" name="1_3" value="10"> (10) อื่นๆ...
									</label>

								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="113_text" name="1_3_text" data-parsley-required="true" readonly />
								</div>
							</div>

							</br>

							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#form2">
											<i class="fa fa-plus-circle pull-right"></i>
											1. แบบสอบถามความรู้เกี่ยวกับกฎหมายและกระบวนการยุติธรรม
										</a>
									</h3>
								</div>
								<div id="form2" class="panel-collapse collapse collapseForm">
									<div data-include="../surveyFrom2"></div>
								</div>
							</div>


							<div class="panel panel-inverse overflow-hidden">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#form6">
											<i class="fa fa-plus-circle pull-right"></i>
											2. แบบสอบถามความเชื่อมั่นของประชาชนที่มีต่อกระบวนการยุติธรรม
										</a>
									</h3>
								</div>
								<div id="form6" class="panel-collapse collapse collapseForm">
									<div data-include="../surveyFrom6"></div>
								</div>
							</div>

							</br></br>

							<div class="row">
								<div class="col-lg-1.5" style="margin-left: auto; margin-right: 0;">
									<a value="Save" data-url="<?= site_url('main/saveSurveySpecial/false') ?>" class="ui basic green button btn-form-varidate-save"><i class="save icon large"></i> บันทึก</a>
								</div>
								<div class="col-lg-1.5">
									<a href="<?= site_url('/main/listSurveySpecial/') ?>" class="ui basic red button "><i class="cancel  icon large"></i> ยกเลิก</a>
								</div>
							</div>
							</br></br></br></br>
						</div>
					</div>
				</form>
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
	<script src="<?php echo base_url() .'/assets/plugins/parsley/dist/parsley.js'?>"></script>

	<script src="<?php echo base_url() . '/assets/js/apps.min.js' ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			if('<?=$d_comeback?>' == 'yes'){
				$('#form1').collapse('show');
				var formele = document.getElementById("form1");
				formele.scrollIntoView();
				
			}
	
		});

		var A4_41 = $('#A4_41');
		var A4_42   = $('#A4_42');
		$('input[name="A4"]').on('change', function() {
			if ($(this).val() === '1') {
				$('select[name="amphure_id_1"]').prop('disabled', false);
				$('select[name="district_id_1"]').prop('disabled', false);
				$('input[name="A4_1_text_3"]').prop('readonly', false);
				$('select[name="province_id"]').prop('disabled', true);
				$('select[name="amphure_id"]').prop('disabled', true);
				$('select[name="district_id"]').prop('disabled', true);
				$('input[name="A4_2_text_4"]').prop('readonly', true);
				$('input[name="A4_2_text_5"]').prop('readonly', true);

				document.getElementById("A4_41").setAttribute("data-parsley-required", "true");
				document.getElementById("A4_42").setAttribute("data-parsley-required", "false");
				document.getElementById("A4_52").setAttribute("data-parsley-required", "false");
				document.getElementById("A4_42").value = "";
				document.getElementById("A4_52").value = "";
				document.getElementById("province").value = "";
				document.getElementById("amphure").value = "";
				document.getElementById("district").value = "";


			} else {
				$('select[name="amphure_id_1"]').prop('disabled', true);
				$('select[name="district_id_1"]').prop('disabled', true);
				$('input[name="A4_1_text_3"]').prop('readonly', true);
				$('select[name="province_id"]').prop('disabled', false);
				$('select[name="amphure_id"]').prop('disabled', false);
				$('select[name="district_id"]').prop('disabled', false);
				$('input[name="A4_2_text_4"]').prop('readonly', false);
				$('input[name="A4_2_text_5"]').prop('readonly', false);

				document.getElementById("A4_41").setAttribute("data-parsley-required", "false");
				document.getElementById("A4_42").setAttribute("data-parsley-required", "true");
				document.getElementById("A4_52").setAttribute("data-parsley-required", "true");
				document.getElementById("A4_41").value = "";
				document.getElementById("amphure_1").value = "";
				document.getElementById("district_1").value = "";

			}
		});

		$(function() {
			var includes = $('[data-include]')
			$.each(includes, function() {
				var file = $(this).data('include')
				$(this).load(file + '/<?= $u_now_id ?>')
			})
		});

		$('#form1').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
			$('#form7').collapse('hide');
		})

		$('#form2').on('shown.bs.collapse', function() {
			$('#form1').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
			$('#form7').collapse('hide');
		})

		$('#form3').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form1').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
			$('#form7').collapse('hide');
		})

		$('#form4').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form1').collapse('hide');
			$('#form5').collapse('hide');
			$('#form6').collapse('hide');
			$('#form7').collapse('hide');
		})

		$('#form5').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form1').collapse('hide');
			$('#form6').collapse('hide');
			$('#form7').collapse('hide');
		})

		$('#form6').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form1').collapse('hide');
			$('#form7').collapse('hide');
		})

		$('#form7').on('shown.bs.collapse', function() {
			$('#form2').collapse('hide');
			$('#form3').collapse('hide');
			$('#form4').collapse('hide');
			$('#form5').collapse('hide');
			$('#form1').collapse('hide');
			$('#form6').collapse('hide');
		})

		$('input[name="1_1_4"]').on('change', function() {
			if ($(this).val() === '8') {
				$('input[name="1_1_4_text"]').prop('readonly', false);
				document.getElementById("1114_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="1_1_4_text"]').prop('readonly', true);
				document.getElementById("1114_text").setAttribute("data-parsley-required", "false");
				document.getElementById("1114_text").value = "";
			}
		});

		$('input[name="1_1_5"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="1_1_5_text"]').prop('readonly', false);
				document.getElementById("1115_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="1_1_5_text"]').prop('readonly', true);
				document.getElementById("1115_text").setAttribute("data-parsley-required", "false");
				document.getElementById("1115_text").value = "";
			}
		});

		$('input[name="1_1_7"]').on('change', function() {
			if ($(this).val() === '1') {
				$('input[name="1_1_7_1"]').prop('disabled', false);
				$('input[name="1_1_7_C1"]').prop('disabled', false);
				$('input[name="1_1_7_C2"]').prop('disabled', false);
				$('input[name="1_1_7_C3"]').prop('disabled', false);
				$('input[name="1_1_7_C4"]').prop('disabled', false);
				$('input[name="1_1_7_C5"]').prop('disabled', false);
				$('input[name="1_1_7_C6"]').prop('disabled', false);
				$('input[name="1_1_7_C7"]').prop('disabled', false);
				$('input[name="1_1_7_C8"]').prop('disabled', false);
				$('input[name="1_1_7_C9"]').prop('disabled', false);
				
				document.getElementById("1117_11").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="1_1_7_1"]').prop('disabled', true);

				$('input[name="1_1_7_C1"]').prop('disabled', true);
				$('input[name="1_1_7_C1"]').prop('checked', false);
				$('input[name="1_1_7_C2"]').prop('disabled', true);
				$('input[name="1_1_7_C2"]').prop('checked', false);
				$('input[name="1_1_7_C3"]').prop('disabled', true);
				$('input[name="1_1_7_C3"]').prop('checked', false);
				$('input[name="1_1_7_C4"]').prop('disabled', true);
				$('input[name="1_1_7_C4"]').prop('checked', false);
				$('input[name="1_1_7_C5"]').prop('disabled', true);
				$('input[name="1_1_7_C5"]').prop('checked', false);
				$('input[name="1_1_7_C6"]').prop('disabled', true);
				$('input[name="1_1_7_C6"]').prop('checked', false);
				$('input[name="1_1_7_C7"]').prop('disabled', true);
				$('input[name="1_1_7_C7"]').prop('checked', false);
				$('input[name="1_1_7_C8"]').prop('disabled', true);
				$('input[name="1_1_7_C8"]').prop('checked', false);
				$('input[name="1_1_7_C9"]').prop('disabled', true);
				$('input[name="1_1_7_C9"]').prop('checked', false);
				document.getElementById("11171C9_text").setAttribute("data-parsley-required", "false");
				document.getElementById("11171C9_text").value = "";
				$('input[name="1_1_7_C9_text"]').prop('readonly', true);

				document.getElementById("1117_11").setAttribute("data-parsley-required", "false");
				$('input[name="1_1_7_1"]').prop('checked', false);

			}
		});


		$('input[name="1_1_7_C9"]').on('change', function() {
				if ($(this).prop("checked") == true) {
					$('input[name="1_1_7_C9_text"]').prop('readonly', false);
					document.getElementById("11171C9_text").setAttribute("data-parsley-required", "true");
				} else {
					$('input[name="1_1_7_C9_text"]').prop('readonly', true);
					document.getElementById("11171C9_text").setAttribute("data-parsley-required", "false");
					document.getElementById("11171C9_text").value = "";
				}
			});


		$('input[name="1_2"]').on('change', function() {
			if ($(this).val() === '9') {
				$('input[name="1_2_text"]').prop('readonly', false);
				document.getElementById("112_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="1_2_text"]').prop('readonly', true);
				document.getElementById("112_text").setAttribute("data-parsley-required", "false");
				document.getElementById("112_text").value = "";
			}
		});


		$('input[name="1_3"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="1_3_text"]').prop('readonly', false);
				document.getElementById("113_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="1_3_text"]').prop('readonly', true);
				document.getElementById("113_text").setAttribute("data-parsley-required", "false");
				document.getElementById("113_text").value = "";
			}
		});

		$('input[name="1_1_2"]').on('change', function() {
			document.getElementById("1_212").value = document.getElementById("1112").value;
		});

		$('input[name="1_1_1"]').on('change', function() {
			if(document.getElementById("11111").checked){
				document.getElementById("1_2111").checked = true;
				document.getElementById("1_2112").checked = false;
				document.getElementById("1_2113").checked = false;
			}
			if(document.getElementById("11112").checked){
				document.getElementById("1_2112").checked = true;
				document.getElementById("1_2113").checked = false;
				document.getElementById("1_2111").checked = false;
			}
			if(document.getElementById("11113").checked){
				document.getElementById("1_2113").checked = true;
				document.getElementById("1_2112").checked = false;
				document.getElementById("1_2111").checked = false;
			}
		});
		
		

		$(function() {
			var provinceObject = $('#province');
			var amphureObject = $('#amphure');
			var districtObject = $('#district');

			// on change province
			provinceObject.on('change', function() {
				var provinceId = $(this).val();
				<? foreach ($d_province as $resultpro) { ?>
					if (provinceId == '<? echo $resultpro->name_th ?>') {
						provinceId = '<? echo $resultpro->id ?>';
					}
				<? } ?>
				amphureObject.html('<option value="">เลือกอำเภอ</option>');
				<? foreach ($d_amphures as $resultamp) { ?>
					if (provinceId == <? echo $resultamp->province_id ?>) {
						amphureObject.append('<option value="<?= $resultamp->name_th ?>"><?= $resultamp->name_th ?></option>')
					}
				<? } ?>
				districtObject.html('<option value="">เลือกตำบล</option>');

			});

			// on change amphure amphure_id
			amphureObject.on('change', function() {
				var amphureId = $(this).val();
				<? foreach ($d_amphures as $resultamp) { ?>
					if (amphureId == '<? echo $resultamp->name_th ?>') {
						amphureId = '<? echo $resultamp->id ?>';
					}
				<? } ?>
				districtObject.html('<option value="">เลือกตำบล</option>');
				<? foreach ($d_districts as $resultdis) { ?>
					if (amphureId == <? echo $resultdis->amphure_id ?>) {
						districtObject.append('<option value="<?= $resultdis->name_th ?>"><?= $resultdis->name_th ?></option>')
					}
				<? } ?>
			});
		});

		$(function() {
			var amphureObject = $('#amphure_1');
			var districtObject = $('#district_1');

			// on change province
			amphureObject.html('<option value="">เลือกเขต</option>');
			<? foreach ($d_amphures as $resultamp) { ?>
				if (1 == <? echo $resultamp->province_id ?>) {
					amphureObject.append('<option value="<?= $resultamp->name_th ?>"><?= $resultamp->name_th ?></option>')
				}
			<? } ?>
			districtObject.html('<option value="">เลือกแขวง</option>');

			// on change amphure amphure_id
			amphureObject.on('change', function() {
				var amphureId = $(this).val();
				<? foreach ($d_amphures as $resultamp) { ?>
					if (amphureId == '<? echo $resultamp->name_th ?>') {
						amphureId = '<? echo $resultamp->id ?>';
					}
				<? } ?>
				districtObject.html('<option value="">เลือกแขวง</option>');
				<? foreach ($d_districts as $resultdis) { ?>
					if (amphureId == <? echo $resultdis->amphure_id ?>) {
						districtObject.append('<option value="<?= $resultdis->name_th ?>"><?= $resultdis->name_th ?></option>')
					}
				<? } ?>
			});
		});

		if ('<?= $u_check_new_survey_profile ?>' != '0') {
			$(function() {
				document.getElementById("A2").value = '<?= $d_surveyProfile->A2 ?>';
				document.getElementById("A3").value = `<?= $d_surveyProfile->A3 ?>`;
				checkId(document.getElementById("A4<?= $d_surveyProfile->A4 ?>"));
				if ('<?= $d_surveyProfile->A4 ?>' == '1') {
					$('select[name="amphure_id_1"]').prop('disabled', false);
					$('select[name="district_id_1"]').prop('disabled', false);
					$('input[name="A4_1_text_3"]').prop('readonly', false);
					$('select[name="province_id"]').prop('disabled', true);
					$('select[name="amphure_id"]').prop('disabled', true);
					$('select[name="district_id"]').prop('disabled', true);
					$('input[name="A4_2_text_4"]').prop('readonly', true);
					$('input[name="A4_2_text_5"]').prop('readonly', true);

					document.getElementById("A4_41").setAttribute("data-parsley-required", "true");
					document.getElementById("A4_42").setAttribute("data-parsley-required", "false");
					document.getElementById("A4_52").setAttribute("data-parsley-required", "false");
				} else {
					$('select[name="amphure_id_1"]').prop('disabled', true);
					$('select[name="district_id_1"]').prop('disabled', true);
					$('input[name="A4_1_text_3"]').prop('readonly', true);
					$('select[name="province_id"]').prop('disabled', false);
					$('select[name="amphure_id"]').prop('disabled', false);
					$('select[name="district_id"]').prop('disabled', false);
					$('input[name="A4_2_text_4"]').prop('readonly', false);
					$('input[name="A4_2_text_5"]').prop('readonly', false);

					document.getElementById("A4_41").setAttribute("data-parsley-required", "false");
					document.getElementById("A4_42").setAttribute("data-parsley-required", "true");
					document.getElementById("A4_52").setAttribute("data-parsley-required", "true");
				}
				if ('<?= $d_surveyProfile->A4 ?>' == '2') {
					$("#province").val('<?= $d_surveyProfile->A4_1 ?>').change();
					$("#amphure").val('<?= $d_surveyProfile->A4_2 ?>').change();
					$("#district").val('<?= $d_surveyProfile->A4_3 ?>').change();
					document.getElementById("A4_42").value = '<?= $d_surveyProfile->A4_4 ?>';
					document.getElementById("A4_52").value = '<?= $d_surveyProfile->A4_5 ?>';
				} else {
					$("#amphure_1").val('<?= $d_surveyProfile->A4_2 ?>').change();
					$("#district_1").val('<?= $d_surveyProfile->A4_3 ?>').change();
					document.getElementById("A4_41").value = '<?= $d_surveyProfile->A4_4 ?>';
				}

				checkId(document.getElementById("1111<?= $d_surveyProfile->{'1_1_1'} ?>"));
				document.getElementById("1112").value = '<?= $d_surveyProfile->{'1_1_2'} ?>';
				checkId(document.getElementById("1113<?= $d_surveyProfile->{'1_1_3'} ?>"));
				checkId(document.getElementById("1114<?= $d_surveyProfile->{'1_1_4'} ?>"));
				if ('<?= $d_surveyProfile->{'1_1_4'} ?>' == '8') {
					$('input[name="1_1_4_text"]').prop('readonly', false);
					document.getElementById("1114_text").setAttribute("data-parsley-required", "true");
				} else {
					$('input[name="1_1_4_text"]').prop('readonly', true);
					document.getElementById("1114_text").setAttribute("data-parsley-required", "false");
				}
				document.getElementById("1114_text").value = '<?= $d_surveyProfile->{'1_1_4_text'} ?>';
				checkId(document.getElementById("1115<?= $d_surveyProfile->{'1_1_5'} ?>"));
				if ('<?= $d_surveyProfile->{'1_1_5'} ?>' == '10') {
					$('input[name="1_1_5_text"]').prop('readonly', false);
					document.getElementById("1115_text").setAttribute("data-parsley-required", "true");
				} else {
					$('input[name="1_1_5_text"]').prop('readonly', true);
					document.getElementById("1115_text").setAttribute("data-parsley-required", "false");
				}
				document.getElementById("1115_text").value = '<?= $d_surveyProfile->{'1_1_5_text'} ?>';
				checkId(document.getElementById("1116<?= $d_surveyProfile->{'1_1_6'} ?>"));

				checkId(document.getElementById("1117<?= $d_surveyProfile->{'1_1_7'} ?>"));
				if ('<?= $d_surveyProfile->{'1_1_7'} ?>' == '1') {
					$('input[name="1_1_7_C1"]').prop('disabled', false);
					$('input[name="1_1_7_C2"]').prop('disabled', false);
					$('input[name="1_1_7_C3"]').prop('disabled', false);
					$('input[name="1_1_7_C4"]').prop('disabled', false);
					$('input[name="1_1_7_C5"]').prop('disabled', false);
					$('input[name="1_1_7_C6"]').prop('disabled', false);
					$('input[name="1_1_7_C7"]').prop('disabled', false);
					$('input[name="1_1_7_C8"]').prop('disabled', false);
					$('input[name="1_1_7_C9"]').prop('disabled', false);
					$('input[name="1_1_7_1"]').prop('disabled', false);

					document.getElementById("1117_11").setAttribute("data-parsley-required", "true");
				} else {
					$('input[name="1_1_7_C1"]').prop('disabled', true);
					$('input[name="1_1_7_C2"]').prop('disabled', true);
					$('input[name="1_1_7_C3"]').prop('disabled', true);
					$('input[name="1_1_7_C4"]').prop('disabled', true);
					$('input[name="1_1_7_C5"]').prop('disabled', true);
					$('input[name="1_1_7_C6"]').prop('disabled', true);
					$('input[name="1_1_7_C7"]').prop('disabled', true);
					$('input[name="1_1_7_C8"]').prop('disabled', true);
					$('input[name="1_1_7_C9"]').prop('disabled', true);
					$('input[name="1_1_7_1"]').prop('disabled', true);

					document.getElementById("1117_11").setAttribute("data-parsley-required", "false");
				}

				if ('<?= $d_surveyProfile->{'1_1_7_C9'} ?>' == '1') {
					$('input[name="1_1_7_C9_text"]').prop('readonly', false);
					document.getElementById("11171C9_text").setAttribute("data-parsley-required", "true");
				} else {
					$('input[name="1_1_7_C9_text"]').prop('readonly', true);
					document.getElementById("11171C9_text").setAttribute("data-parsley-required", "false");
				}

				checkIdnCheckBOX(document.getElementById('11171C1'), '<?= $d_surveyProfile->{'1_1_7_C1'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C2'), '<?= $d_surveyProfile->{'1_1_7_C2'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C3'), '<?= $d_surveyProfile->{'1_1_7_C3'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C4'), '<?= $d_surveyProfile->{'1_1_7_C4'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C5'), '<?= $d_surveyProfile->{'1_1_7_C5'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C6'), '<?= $d_surveyProfile->{'1_1_7_C6'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C7'), '<?= $d_surveyProfile->{'1_1_7_C7'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C8'), '<?= $d_surveyProfile->{'1_1_7_C8'} ?>');
				checkIdnCheckBOX(document.getElementById('11171C9'), '<?= $d_surveyProfile->{'1_1_7_C9'} ?>');
				document.getElementById("11171C9_text").value = '<?= $d_surveyProfile->{'1_1_7_C9_text'} ?>';

				checkId(document.getElementById("1117_1<?= $d_surveyProfile->{'1_1_7_1'} ?>"));

				checkId(document.getElementById("112<?= $d_surveyProfile->{'1_2'} ?>"));
				if ('<?= $d_surveyProfile->{'1_2'} ?>' == '9') {
					$('input[name="1_2_text"]').prop('readonly', false);
					document.getElementById("112_text").setAttribute("data-parsley-required", "true");
				} else {
					$('input[name="1_2_text"]').prop('readonly', true);
					document.getElementById("112_text").setAttribute("data-parsley-required", "false");
				}
				document.getElementById("112_text").value = '<?= $d_surveyProfile->{'1_2_text'} ?>';

				checkId(document.getElementById("113<?= $d_surveyProfile->{'1_3'} ?>"));
				if ('<?= $d_surveyProfile->{'1_3'} ?>' == '10') {
					$('input[name="1_3_text"]').prop('readonly', false);
					document.getElementById("113_text").setAttribute("data-parsley-required", "true");
				} else {
					$('input[name="1_3_text"]').prop('readonly', true);
					document.getElementById("113_text").setAttribute("data-parsley-required", "false");
				}
				document.getElementById("113_text").value = '<?= $d_surveyProfile->{'1_3_text'} ?>';

			});
		};

		function maxLengthCheck(object)
		{
			if (object.value.length > object.maxLength)
			object.value = object.value.slice(0, object.maxLength)
		}

		function checkId(id){
				if(id != null){
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
			if(this.checked) {
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