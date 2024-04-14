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
				<form class="a form app form-horizontal" id="form-data-varidate" data-parsley-errors-messages-disabled data-parsley-inputs="input:not([type='radio']), textarea, select" method="post">


					<label for="wight">แบบสำรวจข้อมูลการให้สินบนหรือถูกเรียกรับสินบนจากหน่วยงานของรัฐหรือเจ้าหน้าที่รัฐ (ผนวก ง) </label></br>
					<label for="wight">3.2 แบบบันทึกข้อมูลการกระทำผิด</label>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-3">3.2.1 รหัสคดี<span class="star"> *</span></label>
						<div class="col-lg-3">
							<input type="text" class="form-control" id="3_211" name="3_S3_2_1_1" data-parsley-required="true" />
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-3">3.2.2 หน่วยงานของรัฐที่ติดต่อ</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" id="3_221" name="3_S3_2_2_1" data-parsley-required="true" readonly size="30" />
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-3">3.2.3 พฤติกรรมโดยย่อพอสังเขป<span class="star"> *</span></label>
						<div class="col-lg-5">
							<textarea class="form-control" id="3_231" name="3_S3_2_3_1" data-parsley-required="true"></textarea>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-3">3.2.4 ประเภทความผิด<span class="star"> *</span></label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_241" name="3_S3_2_4_1" value="1"> (1) ถูกเรียกสินบนโดยเจ้าหน้าที่รัฐแลกกับการอำนวยความสะดวกหรือไม่จับกุม
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_242" name="3_S3_2_4_2" value="1"> (2) ถูกเรียกสินบนโดยเจ้าหน้าที่รัฐแลกกับการรับโครงการภาครัฐ หรือการจัดซื้อจัดจ้างของภาครัฐ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_243" name="3_S3_2_4_3" value="1"> (3) ถูกเรียกสินบนโดยเจ้าหน้าที่รัฐแลกกับการอำนวยความสะดวกหรือเร่งรัดเกี่ยวกับขออนุญาต หรือการพิจารณาต่าง ๆ ของเจ้าหน้าที่ภาครัฐ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_244" name="3_S3_2_4_4" value="1"> (4) การให้ของขวัญหรือของกำนัล หรือการให้ตอบแทนในรูปแบบอื่นๆ เช่น การเชิญไปรับประทานอาหาร ให้ของขวัญซึ่งเป็นการพยายามสร้างความสัมพันธ์อันใกล้ชิดเพื่อเอื้อประโยชน์จากการใช้อำนาจหน้าที่ของเจ้าหน้าที่ของรั
							</label>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-3">3.2.5 ลักษณะความผิด<span class="star"> *</span></label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_251" name="3_S3_2_5_1" value="1"> (1) การเรียกรับสินบนเล็กน้อย (การรับเงินที่ไม่ชอบธรรม หรือไม่ถูกต้องของเจ้าหน้าที่ของรัฐ เป็นจำนวนเงินที่ไม่มากนัก เพื่อดำเนินการบางอย่างให้กับผู้ที่ให้เงิน
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_252" name="3_S3_2_5_2" value="1"> (2) การเรียกรับสินบนขนาดใหญ่ (การเรียกรับสินบนหรือค่าตอบแทนซึ่งมักเป็นการคอร์รัปชั่นของเจ้าหน้าที่ระดับสูงในหน่วยงานของรัฐที่รับเงินในรูปแบบของสินบนเป็นเงินจำนวนสูง ในโครงการใหญ่ๆของรัฐ เป็นต้น
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_253" name="3_S3_2_5_3" value="1"> (3) การให้ของขวัญหรือของกำนัล (การคอร์รัปชันอีกประเภทหนึ่งเป็นการให้ตอบแทนในรูปแบบสิ่งของ หรือการให้ตอบแทนในรูปแบบอื่นๆ เช่น การเชิญไปรับประทานอาหาร ให้ของขวัญซึ่งเป็นการพยายามสร้างความสัมพันธ์อันใกล้ชิด)
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_254" name="3_S3_2_5_4" value="1"> (4) ผลประโยชน์ทับซ้อน (การคอร์รัปชันอีกประเภทหนึ่งในลักษณะที่ไม่ได้ให้ผลตอบแทนโดยตรงแต่เป็นการเอื้อประโยชน์ทางอ้อม เช่น การได้โครงการของรัฐแต่ต้องตอบแทนโดยจัดซื้อวัตถุดิบจากบริษัทห้างร้านที่เจ้าของโครงการกำหนด การให้ตำแหน่งที่ปรึกษาทางธุรกิจเพื่อแลกเปลี่ยนกับการชี้ช่องว่างทางกฎหมาย เป็นต้น)
							</label>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-5">3.2.6 สินบนหรือของกำนัลที่ให้คือสิ่งใด (ตอบได้มากกว่าหนึ่งอย่าง)<span class="star"> *</span></label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_261" name="3_S3_2_6_1" value="1"> (1) เงิน
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_262" name="3_S3_2_6_2" value="1"> (2) อาหารหรือเครื่องดื่ม
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_263" name="3_S3_2_6_3" value="1"> (3) สิ่งของมีค่า (อาทิเช่น เครื่องประดับ รถยนต์ ฯลฯ)
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_264" name="3_S3_2_6_4" value="1"> (4) การแลกเปลี่ยนกับบริการหรือความช่วยเหลืออื่น
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_265" name="3_S3_2_6_5" value="1"> (5) อื่นๆ
							</label>
							<div class="row indent">
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="3_265_text" name="3_S3_2_6_5_text" data-parsley-required="true" readonly />
								</div>
							</div>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-5">3.2.7 ท่านทราบได้อย่างไรว่าจะต้องมีการจ่ายเงินหรือมอบของขวัญ<span class="star"> *</span></label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_271" name="3_S3_2_7_1" value="1"> (1) คำร้องขอโดยตรงจากเจ้าหน้าที่
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_272" name="3_S3_2_7_2" value="1"> (2) เจ้าหน้าที่ร้องขอทางอ้อม
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_273" name="3_S3_2_7_3" value="1"> (3) บุคคลที่สามร้องขอ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_274" name="3_S3_2_7_4" value="1"> (4) ความต้องการส่วนตัวของตนเอง เพื่ออำนวยความสะดวก/เร่งกระบวนการ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_275" name="3_S3_2_7_5" value="1"> (5) อื่นๆ
							</label>
							<div class="row indent">
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="3_275_text" name="3_S3_2_7_5_text" data-parsley-required="true" readonly />
								</div>
							</div>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-5">3.2.8 มูลค่าของสิ่งที่ท่านให้สินบนหรือถูกเรียกสินบนโดยเจ้าหน้าที่ของรัฐ<span class="star"> *</span></label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_281" name="3_S3_2_8_1" value="1"> (1) ไม่มี
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_282" name="3_S3_2_8_1" value="2"> (2) มี
							</label>
							<div class="row indent">
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									มูลค่าโดยรวมประมาณ
								</div>
								<div class="col-lg-3">
									<input type="number" class="form-control" id="3_283" name="3_S3_2_8_1_text" data-parsley-required="true" readonly />
								</div>
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									บาท
								</div>
							</div>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-7">3.2.9 ท่านได้ร้องเรียนหรือรายงานต่อหน่วยงานของรัฐ (เช่น ตำรวจ อัยการ หน่วยงานต่อต้านการทุจริต ฯลฯ) หรือหน่วยงานที่ไม่เป็นทางการใด ๆ (เช่น สื่อและช่องทางโซเชียลมีเดีย) หรือไม่<span class="star"> *</span></label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_291" name="3_S3_2_9_1" value="1"> (1) ใช่
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_292" name="3_S3_2_9_1" value="2"> (2) ไม่ใช่
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_293" name="3_S3_2_9_1" value="3"> (3) อื่น ๆ
							</label>
							<div class="row indent">
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="3_294" name="3_S3_2_9_1_text" data-parsley-required="true" readonly />
								</div>
							</div>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-8">3.2.10 หากท่านเคยร้องเรียนหรือรายงานเหตุดังกล่าวไปยังหน่วยงานทางการของรัฐ ท่านได้แจ้งไปที่หน่วยงานใด</label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2101" name="3_S3_2_10_1" value="1"> (1) ตำรวจ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2102" name="3_S3_2_10_2" value="1"> (2) สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ (ป.ป.ช.)
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2103" name="3_S3_2_10_3" value="1"> (3) สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตในภาครัฐ (ป.ป.ท.)
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2104" name="3_S3_2_10_4" value="1"> (4) หน่วยงาน/สถาบันเดียวกันกับเจ้าหน้าที่ที่ร้องขอสินบน
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2105" name="3_S3_2_10_5" value="1"> (5) กรมสอบสวนคดีพิเศษ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2106" name="3_S3_2_10_6" value="1"> (6) ช่องทางร้องเรียนของรัฐ (ศูนย์ดำรงธรรม)
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2107" name="3_S3_2_10_7" value="1"> (7) หน่วยงานราชการอื่น ๆ
							</label>
							<div class="row indent">
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="3_2108" name="3_S3_2_10_7_text" data-parsley-required="true" readonly />
								</div>
							</div>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-8">3.2.11 หากท่านเคยร้องเรียนหรือรายงานเหตุการณ์ดังกล่าวไปยังหน่วยงานที่ไม่เป็นทางการ ท่านได้แจ้งไปที่หน่วยงานใด</label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2111" name="3_S3_2_11_1" value="1"> (1) สื่อมวลชน
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2112" name="3_S3_2_11_2" value="1"> (2) องค์การระหว่างประเทศ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2113" name="3_S3_2_11_3" value="1"> (3) องค์กรพัฒนาเอกชน (NGO)
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2114" name="3_S3_2_11_4" value="1"> (4) โซเชียลมีเดีย ( Facebook , Twitter , Line , Instagram)
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2115" name="3_S3_2_11_5" value="1"> (5) หน่วยงานที่ไม่เป็นทางการอื่น ๆ
							</label>
							<div class="row indent">
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="3_2116" name="3_S3_2_11_5_text" data-parsley-required="true" readonly />
								</div>
							</div>
						</div>
					</div>
					<div class="row indent">
						<label for="A2" class="col-form-label nText col-lg-8">3.2.12 หากท่านไม่ได้ร้องเรียนหรือรายงานถึงเหตุการณ์การให้สินบนหรือถูกเรียกสินบนโดยเจ้าหน้าที่ของรัฐ เหตุใดท่านถึงไม่รายงาน</label>
						<div class="col-lg-12">
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2121" name="3_S3_2_12_1" value="1"> (1) คิดว่าเป็นเรื่องปกติในการจ่ายหรือให้ของขวัญ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2122" name="3_S3_2_12_2" value="1"> (2) คิดว่าไม่มีประโยชน์ ไม่มีหน่วยงานให้ความสนใจ
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2123" name="3_S3_2_12_3" value="1"> (3) ไม่ทราบว่าจะต้องร้องเรียนกับหน่วยงานใด
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2124" name="3_S3_2_12_4" value="1"> (4) กลัวส่งผลเสียต่อตัวตนเอง
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2125" name="3_S3_2_12_5" value="1"> (5) ตนเองได้รับผลประโยชน์
							</label>
							<label class="radio-inline col-form-label  col-lg-12" style="margin-left: 10px;">
								<input type="radio" id="3_2126" name="3_S3_2_12_6" value="1"> (6) เหตุผลอื่นๆ
							</label>
							<div class="row indent">
								<div class="col-form-label inputTextFix" style="margin-left: 25px;">
									โปรดระบุ
								</div>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="3_2127" name="3_S3_2_12_6_text" data-parsley-required="true" readonly />
								</div>
							</div>
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



		function maxLengthCheck(object) {
			if (object.value.length > object.maxLength)
				object.value = object.value.slice(0, object.maxLength)
		}

		function checkId(id) {
			if (id != null) {
				id.checked = true;
			}
		};

		function checkIdnradio(id, value) {
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