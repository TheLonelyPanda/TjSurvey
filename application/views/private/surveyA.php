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
				<form class="a form app form-horizontal" id="form-data-varidate" data-parsley-errors-messages-disabled data-parsley-inputs="input:not([type='checkbox']), textarea, select" method="post">
					<div class="container" style="text-align: right;">
						<div class="line">
							<label class="col-form-label nText">ผู้สำรวจ</label>
							<div class="col-lg-3">
								<input type="text" class="form-control" name="user_text" value="" readonly />
							</div>
						</div>
						</br>
						<div class="line">
							<label class="col-form-label nText">แบบสำรวจลำดับที่</label>
							<div class="col-lg-2">
								<input type="hidden" name="1_text" value="" readonly />
								<input type="text" class="form-control" name="2_text" value="" readonly />
							</div>
						</div>
					</div>

					<label for="wight">ส่วนที่ 1 ข้อมูลเกี่ยวกับผู้ตอบแบบสอบถาม</label>
					<div class="p-fluid p-formgrid p-grid">
						<div class="p-field p-col">

							<div class="row">
								<label class="col-form-label">A1 ข้อมูลส่วนบุคคล</label></br>
							</div>
							<div class="row indent">
								<label class="col-form-label nText col-lg-2">A2 บ้านเลขที่<span class="star"> *</span></label>
								<div class="col-lg-2 ">
									<input type="text" class="form-control" id="A2" name="A2" data-parsley-required="true" />
								</div>
							</div>
							<div class="row indent">
								<label class="col-form-label nText col-lg-2">A3 พิกัดบ้าน (NS) (EW)<span class="star"> *</span></label>
								<div class="col-lg-2 ">
									<input type="text" class="form-control" id="A3" name="A3" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">
								<label class="nText">หมายเหตุ : ข้อมูลที่จัดเก็บจากการสำรวจครั้งนี้จะถูกเก็บไว้เป็นความลับ และถูกนำมาใช้วิเคราะห์ในภาพรวมเพื่อประโยชน์สำหรับการดำเนินงานของสำนักงานกิจการยุติธรรม กระทรวงยุติธรรม เท่านั้น</label></br>
							</div>

							<div class="row">
								<label class="col-form-label">A4 พื้นที่<span class="star"> *</span></label>
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
												<input type="text" class="form-control" id="A4_41" name="A4_1_text_3" data-parsley-required="true" readonly />
											</label>
										</div>
									</div>

									<div style="width: 50%; float:right;">
										<div class="row" style="margin-left: 10px;">
											<input type="radio" id="A42" name="A4" value="2">
											<label class="radio-inline col-lg-4" style="align-self: center;">(A4.2) จังหวัดอื่นๆ (ระบุ)</label>
										</div>
										<div class="row">
											<label class="radio-inline col-lg-45" style="align-self: center; margin-left: 30px;">จังหวัด<span class="star"> *</span></label>
											<label class="radio-inline col-form-label  col-lg-5">
												<select name="province_id" id="province" class="form-control" disabled>
													<option value="">เลือกจังหวัด</option>
													<? foreach ($d_province as $result) { ?>
														<? if ($result->name_th != 'กรุงเทพมหานคร') { ?>
															<option value="<?= $result->name_th ?>"><?= $result->name_th ?></option>
													<? }
													} ?>
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


							<label for="wight">ข้อมูลบุคคลของผู้ตอบแบบสอบถาม (ผู้แทนครัวเรือน)</label>

							<div class="row">
								<label class="col-form-label">1. เพศ<span class="star"> * </span> &nbsp</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="01_01" name="01" value="1" data-parsley-required="true"> (1) ชาย
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="01_02" name="01" value="2"> (2) หญิง
								</label>
								<label class="radio-inline col-form-label">
									<input type="radio" id="01_03" name="01" value="3"> (3) เพศทางเลือก
								</label>
							</div>

							<div class="row">
								<label class="col-form-label">2. อายุ<span class="star"> *</span></label>
								<div class="col-lg-1">
									<input type="number" class="form-control" oninput="maxLengthCheck(this)" maxlength="3" id="02" name="02" data-parsley-required="true" />
								</div>
								<div class="col-form-label inputTextFix">
									ปี (เต็มปีบริบูรณ์)
								</div>
								<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
									<input type="radio" id="02_C_01" name="02_C" value="1">(1) ไม่ทราบ
								</label>
								<label class="radio-inline col-form-label  col-lg-3">
									<input type="radio" id="02_C_02" name="02_C" value="2">(2) ไม่ประสงค์จะตอบ
								</label>

							</div>

							<div class="row">
								<label class="col-form-label">3. รายได้ครัวเรือน<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="03_01" name="03" value="1" data-parsley-required="true"> (1) ไม่เกิน 15,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_02" name="03" value="2"> (2) 15,001-25,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_03" name="03" value="3"> (3) 25,001-35,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_04" name="03" value="4"> (4) 35,001-45,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_05" name="03" value="5"> (5) 45,001-55,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_06" name="03" value="6"> (6) 55,001-65,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_07" name="03" value="7"> (7) 65,001-75,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_08" name="03" value="8"> (8) มากกว่า 75,000 บาท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="03_09" name="03" value="9"> (9) ไม่ประสงค์จะตอบ
									</label>
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">4. ครัวเรือนของท่านมีระดับรายได้เพียงพอต่อการดำรงชีวิตและค่าใช้จ่ายพื้นฐานมากน้อยเพียงใด <span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="04_01" name="04" value="1" data-parsley-required="true"> (1) มีฐานะร่ำรวย (สามารถจับจ่ายใช้สอย โดยมีเงินเหลือเก็บจำนวนมาก)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="04_02" name="04" value="2"> (2) สามารถจับจ่ายใช้สอยได้อย่างสบาย มีเงินเหลือเก็บ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="04_03" name="04" value="3"> (3) สามารถจับจ่ายใช้สอยได้อย่างสบาย มีเงินเหลือเก็บ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="04_04" name="04" value="4"> (4) รายได้ไม่เพียงพอต่อค่าใช้จ่าย โดยยังขาดเหลืออยู่บ้าง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="04_05" name="04" value="5"> (5) ขัดสน มีชีวิตอยู่อย่างยากลำบาก
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="04_06" name="04" value="6"> (6) ลำบากยากจน มีรายได้ในระดับที่ต้องใช้ชีวิตอย่างยากลำบากมาก
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="04_07" name="04" value="7"> (7) ไม่ทราบ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="04_08" name="04" value="8"> (8) ไม่ประสงค์จะตอบ
									</label>
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">5. อาชีพ<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="05_01" name="05" value="1" data-parsley-required="true"> (1) ข้าราชการ พนักงานรัฐวิสาหกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_02" name="05" value="2"> (2) พนักงานเอกชน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_03" name="05" value="3"> (3) นักเรียน/นักศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_04" name="05" value="4"> (5) รับจ้างทั่วไป
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_05" name="05" value="5"> (5) เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_06" name="05" value="6"> (6) ประกอบธุรกิจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_07" name="05" value="7"> (7) ไม่ได้ประกอบอาชีพ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_08" name="05" value="8"> (8) อื่น ๆ...
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="05_09" name="05" value="9"> (9) ไม่ประสงค์จะตอบ
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="05_text" name="05_text" data-parsley-required="true" readonly />
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">6. การศึกษาระดับสูงสุด<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="06_01" name="06" value="1" data-parsley-required="true"> (1) ไม่เคยเข้ารับการศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_02" name="06" value="2"> (2) การศึกษาทางเลือกนอกโรงเรียน (อาทิ Home School)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_03" name="06" value="3"> (3) ประถมศึกษา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_04" name="06" value="4"> (4) มัธยมศึกษาตอนต้น
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_05" name="06" value="5"> (5) มัธยมศึกษาตอนปลาย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_06" name="06" value="6"> (6) ปวช.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_07" name="06" value="7"> (7) ปวส.
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_08" name="06" value="8"> (8) ปริญญาตรี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_09" name="06" value="9"> (9) ปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_10" name="06" value="10"> (10) สูงกว่าปริญญาโท
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_11" name="06" value="11"> (11) การศึกษาในรูปแบบอื่น...
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_12" name="06" value="12"> (12) ไม่ทราบ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="06_13" name="06" value="13"> (13) ไม่ประสงค์จะตอบ
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="06_text" name="06_text" data-parsley-required="true" readonly />
								</div>
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									(กรณีศึกษาในระบบการศึกษานอกโรงเรียนของกระทรวงศึกษาธิการ (กศน.) ให้ระบุระดับการศึกษาสูงสุดที่สอบวัดระดับผ่าน)
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">7. สถานภาพสมรส<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="07_01" name="07" value="1" data-parsley-required="true"> (1) โสด
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_02" name="07" value="2"> (2) แต่งงานแล้ว
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_03" name="07" value="3"> (3) อยู่ร่วมกัน
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_04" name="07" value="4"> (4) แยกกันอยู่
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_05" name="07" value="5"> (5) หย่าร้าง
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_06" name="07" value="6"> (6) หม้าย
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_07" name="07" value="7"> (7) อื่น ๆ โปรดระบุ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_08" name="07" value="8"> (8) ไม่ทราบ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="07_09" name="07" value="9"> (9) ไม่ประสงค์จะตอบ
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="07_text" name="07_text" data-parsley-required="true" readonly />
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">8. สัญชาติ<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="08_01" name="08" value="1" data-parsley-required="true"> (1) ไทย
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_02" name="08" value="2"> (2) อื่น ๆ โปรดระบุ
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="08_text" name="08_text" data-parsley-required="true" readonly />
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									เหตุผลที่ท่านอาศัยอยู่ในประเทศไทย
								</div>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="08_N_01" name="08_N" value="1" disabled> (1) แรงงานต่างด้าว
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_02" name="08_N" value="2" disabled> (2) นักศึกษาต่างชาติ ฝึกอบรม
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_03" name="08_N" value="3" disabled> (3) ได้รับการจ้างงานในประเทศไทย (ตามสัญญาจ้างตั้งแต่ก่อนเข้ามาในประเทศ)
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_04" name="08_N" value="4" disabled> (4) ได้รับการจ้างงานในประเทศไทย (เพิ่งหางานได้หลังจากเข้าประเทศ)
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_05" name="08_N" value="5" disabled> (5) ติดตามคู่สมรส ครอบครัว (รวมถึงความสัมพันธ์คู่รักในรูปแบบอื่น)
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_06" name="08_N" value="6" disabled> (6) ติดตามบิดามารดา หรือผู้ปกครอง
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_07" name="08_N" value="7" disabled> (7) เกิดและพำนักในประเทศไทยตั้งแต่เกิด แต่ไม่ได้สัญชาติไทย
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_08" name="08_N" value="8" disabled> (8) นักท่องเที่ยวระยะยาวต่อเนื่องในช่วงเวลาที่เก็บแบบสอบถาม
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_09" name="08_N" value="9" disabled> (9) ผู้ลี้ภัยจากสงคราม ความขัดแย้งภายในประเทศ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_10" name="08_N" value="10" disabled> (10) อื่น ๆ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_11" name="08_N" value="11" disabled> (11) ไม่ทราบ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="08_N_12" name="08_N" value="12" disabled> (12) ไม่ประสงค์จะตอบ
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="08_N_text" name="08_N_text" data-parsley-required="true" readonly />
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">9. ความพิการ<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="09_01" name="09" value="1" data-parsley-required="true"> (1) ไม่พิการ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_02" name="09" value="2"> (2) บกพร่องทางการเห็น
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_03" name="09" value="3"> (3) บกพร่องทางการได้ยิน
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_04" name="09" value="4"> (4) บกพร่องทางสติปัญญา
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_05" name="09" value="5"> (5) บกพร่องทางร่างกายและสุขภาพ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_06" name="09" value="6"> (6) บกพร่องทางการเรียนรู้
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_07" name="09" value="7"> (7) บกพร่องทางการพูดและภาษา
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_08" name="09" value="8"> (8) บกพร่องทางพฤติกรรมและอารมณ์
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_09" name="09" value="9"> (9) ออทิสติก
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="09_10" name="09" value="10"> (10) พิการซ้อน
									</label>
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">10. ศาสนา<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="10_01" name="10" value="1" data-parsley-required="true"> (1) ไม่มีศาสนา
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="10_02" name="10" value="2"> (2) คริสต์
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="10_03" name="10" value="3"> (3) อิสลาม
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="10_04" name="10" value="4"> (4) พราหมณ์-ฮินดู
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="10_05" name="10" value="5"> (5) พุทธ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="10_06" name="10" value="6"> (6) อื่น ๆ โปรดระบุ
									</label>
									<label class="radio-inline col-form-label col-lg-3">
										<input type="radio" id="10_07" name="10" value="7"> (7) ไม่ประสงค์จะตอบ
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="10_text" name="10_text" data-parsley-required="true" readonly />
								</div>
							</div>



							</br>
							<div class="row">
								<label class="col-form-label">11. ท่านเห็นการปฏิบัติงานของเจ้าหน้าที่ตำรวจ หรือเจ้าหน้าที่ของหน่วยงานด้านยุติธรรม </br>เช่น เจ้าหน้าที่คุมประพฤติ เจ้าหน้าที่ราชทัณฑ์ เจ้าหน้าที่ยุติธรรมจังหวัด เจ้าหน้าที่ยุติธรรมชุมชน เป็นต้น </br>ในการปฏิบัติงานในพื้นที่ชุมชนของท่านมากน้อยเพียงใด<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="11_01" name="11" value="1" data-parsley-required="true"> (1) สัปดาห์ละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11_02" name="11" value="2"> (2) เดือนละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11_03" name="11" value="3"> (3) ปีละครั้ง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11_04" name="11" value="4"> (4) มากกว่า 1 ครั้ง/ปี
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="11_05" name="11" value="5"> (5) ไม่เคยพบ
									</label>
								</div>
							</div>



							</br>
							<div class="row">
								<label class="col-form-label">12. สถานะของท่านในครัวเรือน (ท่านมีความเกี่ยวข้องสัมพันธ์กับเจ้าของบ้านอย่างไร)<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="12_01" name="12" value="1" data-parsley-required="true"> (1) เจ้าของบ้าน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_02" name="12" value="2"> (2) คู่สมรส
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_03" name="12" value="3"> (3) บิดามารดา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_04" name="12" value="4"> (4) บุตร
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_05" name="12" value="5"> (5) ปู่/ย่า/ตา/ยาย
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_06" name="12" value="6"> (6) หลาน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_07" name="12" value="7"> (7) พี่/น้อง
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_08" name="12" value="8"> (8) ลุง/ป้า/น้า/อา
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="12_09" name="12" value="9"> (9) อื่นๆ...
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="12_text" name="12_text" data-parsley-required="true" readonly />
								</div>
							</div>


							<div class="row">
								<label class="col-form-label">13. ลักษณะบริเวณที่อยู่อาศัย<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-8" style="margin-left: 10px;">
										<input type="radio" id="13_01" name="13" value="1" data-parsley-required="true"> (1) เขตที่พักอาศัยทั่วไป เช่น หมู่บ้านจัดสรร บ้านเดี่ยว
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="13_02" name="13" value="2"> (2) เขตธุรกิจ เช่น เขตที่มีบริษัท ห้าง ร้าน อยู่รวมกันเป็นบริเวณกว้าง
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="13_03" name="13" value="3"> (3) เขตชุมชนแออัด หรือชุมชนที่มีลักษณะบ้านเรือนหนาแน่น และประชากรอยู่อย่างแออัด
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="13_04" name="13" value="4"> (4) เขตอุตสาหกรรม หรือชุมชนที่อยู่ในบริเวณที่มีโรงงานอุตสาหกรรมจำนวนมากหรือนิคมอุตสาหกรรมตั้งอยู่
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="13_05" name="13" value="5"> (5) เขตเกษตรกรรม หรือชุมชนที่อยู่ในบริเวณพื้นที่เกษตรกรรม
									</label>
									<label class="radio-inline col-form-label  col-lg-8">
										<input type="radio" id="13_06" name="13" value="6"> (6) อื่นๆ...
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="13_text" name="13_text" data-parsley-required="true" readonly />
								</div>
							</div>

							<div class="row">
								<label class="col-form-label">14. ในรอบปี พ.ศ. 2566 ที่ผ่านมา (1 มกราคม 2566 ถึง 31 ธันวาคม 2566) ท่านเคยติดต่อหรือรับบริการจากหน่วยงานในกระบวนการยุติธรรมต่อไปนี้หรือไม่<span class="star"> *</span></label>
								<div class="col-lg-12">
									<label class="radio-inline col-form-label  col-lg-3" style="margin-left: 10px;">
										<input type="radio" id="14_01" name="14" value="1" data-parsley-required="true"> (1) ศาล
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_02" name="14" value="2"> (2) อัยการ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_03" name="14" value="3"> (3) ตำรวจ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_04" name="14" value="4"> (4) ป.ป.ช. (สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ หรือหน่วยงานในสังกัด)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_05" name="14" value="5"> (5) ปปง. (สำนักงานป้องกันและปราบปรามการฟอกเงิน หรือหน่วยงานในสังกัด)
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_06" name="14" value="6"> (6) สำนักงานปลัดกระทรวงยุติธรรม หรือหน่วยงานยุติธรรมจังหวัด
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_07" name="14" value="7"> (7) กรมสอบสวนคดีพิเศษ หรือหน่วยงานในสังกัด
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_08" name="14" value="8"> (8) สถาบันนิติวิทยาศาสตร์ หรือหน่วยงานในสังกัด
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_09" name="14" value="9"> (9) กรมคุ้มครองสิทธิและเสรีภาพ หรือหน่วยงานในสังกัด
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_10" name="14" value="10"> (10) สำนักงานคุมประพฤติ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_11" name="14" value="11"> (11) สถานพินิจคุ้มครองเด็กและเยาวชน หรือศูนย์ฝึกอบรมเด็กและเยาวชน
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_12" name="14" value="12"> (12) กรมราชทัณฑ์ หรือเรือนจำต่าง ๆ
									</label>
									<label class="radio-inline col-form-label  col-lg-3">
										<input type="radio" id="14_13" name="14" value="13"> (13) ป.ป.ส. (สำนักงานคณะกรรมการป้องกันและปราบปรามยาเสพติด หรือหน่วยงานในสังกัด)
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-form-label inputTextFix" style="margin-left: 10px;">
									หมายเหตุ กรณีตอบข้อใดข้อหนึ่งให้นับเป็นเคยใช้บริการหน่วยงานในกระบวนการยุติธรรม
								</div>
							</div>
							</br></br>

							<div class="row">
								<div class="col-lg-1.5" style="margin-left: auto; margin-right: 0;">
									<a value="Save" id='buttonSaveLast' data-url="<?= site_url('main/saveSurvey/false') ?>" class="ui basic green button btn-form-varidate-save"><i class="save icon large"></i> บันทึก</a>
								</div>
								<div class="col-lg-1.5">
									<a href="<?= site_url('/main/listSurveyAll/') ?>" class="ui basic red button "><i class="cancel  icon large"></i> ยกเลิก</a>
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
	<script src="<?php echo base_url() . '/assets/plugins/parsley/dist/parsley.js' ?>"></script>

	<script src="<?php echo base_url() . '/assets/js/apps.min.js' ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
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

		var A4_41 = $('#A4_41');
		var A4_42 = $('#A4_42');
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

		$('input[name="02_C"]').on('change', function() {
			document.getElementById("02").setAttribute("data-parsley-required", "false");
			document.getElementById("02").value = "";

		});

		$('input[name="02"]').on('change', function() {
			document.getElementById("02").setAttribute("data-parsley-required", "true");
			document.getElementById("02_C_01").checked = false;
			document.getElementById("02_C_02").checked = false;
		});


		$('input[name="05"]').on('change', function() {
			if ($(this).val() === '8') {
				$('input[name="05_text"]').prop('readonly', false);
				document.getElementById("05_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="05_text"]').prop('readonly', true);
				document.getElementById("05_text").setAttribute("data-parsley-required", "false");
				document.getElementById("05_text").value = "";
			}
		});

		$('input[name="06"]').on('change', function() {
			if ($(this).val() === '11') {
				$('input[name="06_text"]').prop('readonly', false);
				document.getElementById("06_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="06_text"]').prop('readonly', true);
				document.getElementById("06_text").setAttribute("data-parsley-required", "false");
				document.getElementById("06_text").value = "";
			}
		});

		$('input[name="07"]').on('change', function() {
			if ($(this).val() === '7') {
				$('input[name="07_text"]').prop('readonly', false);
				document.getElementById("07_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="07_text"]').prop('readonly', true);
				document.getElementById("07_text").setAttribute("data-parsley-required", "false");
				document.getElementById("07_text").value = "";
			}
		});

		$('input[name="08"]').on('change', function() {
			if ($(this).val() === '2') {
				$('input[name="08_text"]').prop('readonly', false);
				document.getElementById("08_text").setAttribute("data-parsley-required", "true");


				$('input[name="08_N"]').prop('checked', false);
				$('input[name="08_N"]').prop('disabled', true);
				$('input[name="08_N_text"]').value = "";
				$('input[name="08_N_text"]').prop('readonly', true);
				document.getElementById("08_N_01").setAttribute("data-parsley-required", "false");
				document.getElementById("08_N_text").setAttribute("data-parsley-required", "false");
			} else {
				$('input[name="08_text"]').prop('readonly', true);
				document.getElementById("08_text").setAttribute("data-parsley-required", "false");
				document.getElementById("08_text").value = "";

				$('input[name="08_N"]').prop('disabled', false);
				document.getElementById("08_N_01").setAttribute("data-parsley-required", "true");
			}
		});

		$('input[name="08_N"]').on('change', function() {
			if ($(this).val() === '10') {
				$('input[name="08_N_text"]').prop('readonly', false);
				document.getElementById("08_N_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="08_N_text"]').prop('readonly', true);
				document.getElementById("08_N_text").setAttribute("data-parsley-required", "false");
				document.getElementById("08_N_text").value = "";
			}
		});

		$('input[name="10"]').on('change', function() {
			if ($(this).val() === '6') {
				$('input[name="10_text"]').prop('readonly', false);
				document.getElementById("10_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="10_text"]').prop('readonly', true);
				document.getElementById("10_text").setAttribute("data-parsley-required", "false");
				document.getElementById("10_text").value = "";
			}
		});

		$('input[name="12"]').on('change', function() {
			if ($(this).val() === '9') {
				$('input[name="12_text"]').prop('readonly', false);
				document.getElementById("12_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="12_text"]').prop('readonly', true);
				document.getElementById("12_text").setAttribute("data-parsley-required", "false");
				document.getElementById("12_text").value = "";
			}
		});

		$('input[name="13"]').on('change', function() {
			if ($(this).val() === '6') {
				$('input[name="13_text"]').prop('readonly', false);
				document.getElementById("13_text").setAttribute("data-parsley-required", "true");
			} else {
				$('input[name="13_text"]').prop('readonly', true);
				document.getElementById("13_text").setAttribute("data-parsley-required", "false");
				document.getElementById("13_text").value = "";
			}
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