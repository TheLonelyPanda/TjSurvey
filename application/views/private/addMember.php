<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>tjsurvey : จัดการผู้ใช้งาน (User)</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="stylesheet" href="<?php echo base_url() . 'css/addMember.css?ts='.time()?>">
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
	<script type="text/javascript" src="<?php echo base_url() . "js/custom/app.custom.js?ts=".time()?>"></script>
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
					<a href="<?= site_url('main/index') ?>" class="navbar-brand"><img src="../img/logo.png" class="logo" alt="" />สํานักงานกิจการยุติธรรม</a>
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
			<h1 class="page-header" style="margin-top : 10px;">จัดการผู้ใช้งาน (User)</h1>
			<div class="body">
				<a href="javascript:void(0)" type="button" data-toggle="modal" data-target="#modal-add" class="ui green button "><i class="plus icon small"></i> เพิ่มผู้ใช้งานใหม่</a>
				</br></br>
				<table id="data-table" data-order='[[0,"asc"]]' class="table table-bordered table-hover table-striped table-td-valign-middle" style="width: 100%;">
					<thead>
						<tr class="inverse">
							<th class="text-center">ลำดับที่</th>
							<th class="text-center">รหัสผู้ใช้งาน (Username)</th>
							<th class="text-center">ชื่อ</th>
							<th class="text-center">นามสกุล</th>
							<th class="text-center">ระดับผู้ใช้งาน</th>
							<th class="text-center">อีเมล</th>
							<th class="text-center">เบอร์ติดต่อ</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $index = 1;
						foreach ($list_user as $row) { ?>
							<tr>
								<td><?php echo $index; ?></td>
								<td><?php echo $row->username; ?></td>
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->surname; ?></td>
								<td><?php echo $row->level; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->mobile; ?></td>
								<td>
									<a href="javascript:void(0)" type="button" data-toggle="modal" data-target="#modal-edit" data-id=<?php echo $row->id; ?> data-username=<?php echo $row->username; ?> data-password=<?php echo $row->password; ?> data-level=<?php echo $row->level; ?> data-name=<?php echo $row->name; ?> data-surname=<?php echo $row->surname; ?> data-email=<?php echo $row->email; ?> data-mobile=<?php echo $row->mobile; ?>><i class="edit icon large" style="color:orange"></i></a>
									<a href="javascript:void(0)" data-url="<?= site_url('/admin/deleteUser/' . $row->id) ?>" class="btn-form-delete"><i class="delete icon large" style="color:red"></i></a>
								</td>
							</tr>
						<?php $index++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- end #content -->

	</div>
	<!-- end page container -->
	<div class="modal fade" id="modal-edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">แก้ไขผู้ใช้งาน</h4>
				</div>
				<form class="b form app" data-parsley-validate="true" id="form-data-varidate-b" method="post">
					<input type="hidden" id="e_modalId" name="e_id">
					<div class="ui form">
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">ชื่อ <span class="star">*</span></label>
									<input type="text" class="input" id="e_modalName" name="e_name" data-parsley-required="true" />
								</div>
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">นามสกุล <span class="star">*</span></label>
									<input type="text" class="input" id="e_modalSurname" name="e_surname" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">อีเมล</label>
									<input class="form-control input" type="text" id="e_modalEmail" name="e_email" data-parsley-type="email" placeholder="Email" />
								</div>
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">เบอร์ติดต่อ <span class="star">*</span></label>
									<input type="text" class="input" id="e_modalMobile" name="e_mobile" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2 m-b-15">
									<label class="col-form-label">ระดับผู้ใช้งาน <span class="star">*</span></label>
									<select class="default-select2 input " id="e_modalLevel" name="e_level">
										<option value="ADMIN">Admin</option>
										<option value="USER">User</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">รหัสผู้ใช้งาน <span class="star">*</span></label>
									<input type="text" class="input" id="e_modalUsername" name="e_username" style="background:#d1d1d1;" readonly />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">รหัสผ่าน <span class="star">*</span></label>
									<input type="password" class="input" id="e_modalPassword" name="e_password" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">รหัสผ่าน (อีกครั้ง) <span class="star">*</span></label>
									<input type="password" class="input" id="e_modalPassword_check" data-parsley-equalto="#e_modalPassword" data-parsley-required="true" />
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a href="index.html" class="btn width-100 btn-default" data-dismiss="modal">ยกเลิก</a>
						<a class="btn width-100 btn-default btn-form-varidate-edit" value="Save" data-url="<?= site_url('admin/editUser') ?>">บันทึก</a>
					</div>

				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-add">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">เพิ่มผู้ใช้งานใหม่</h4>
				</div>
				<form class="a form app" data-parsley-validate="true" id="form-data-varidate" method="post">
					<input type="hidden" id="a_modalId" name="a_id">
					<div class="ui form">
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">ชื่อ <span class="star">*</span></label>
									<input type="text" class="input" id="a_modalName" name="a_name" data-parsley-required="true" />
								</div>
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">นามสกุล <span class="star">*</span></label>
									<input type="text" class="input" id="a_modalSurname" name="a_surname" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">อีเมล</label>
									<input class="form-control input" type="text" id="a_modalEmail" name="a_email" data-parsley-type="email" placeholder="Email" />
								</div>
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">เบอร์ติดต่อ <span class="star">*</span></label>
									<input type="text" class="input" id="a_modalMobile" name="a_mobile" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">

								<div class="col-lg-2 m-b-15">
									<label class="col-form-label">ระดับผู้ใช้งาน <span class="star">*</span></label>
									<select class="default-select2 input " id="a_modalLevel" name="a_level">
										<option value="ADMIN">Admin</option>
										<option value="USER">User</option>
									</select>
								</div>
							</div>
							<div class="row">

								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">รหัสผู้ใช้งาน <span class="star">*</span></label>
									<input type="text" class="input" id="a_modalUsername" name="a_username" data-parsley-required="true" />
								</div>


							</div>
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">รหัสผ่าน <span class="star">*</span></label>
									<input type="password" class="input" id="a_modalPassword" name="a_password" data-parsley-required="true" />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 m-b-15">
									<label class="col-form-label">รหัสผ่าน (อีกครั้ง) <span class="star">*</span></label>
									<input type="password" class="input" id="a_modalPassword_check" data-parsley-equalto="#a_modalPassword" data-parsley-required="true" />
								</div>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<a href="index.html" class="btn width-100 btn-default" data-dismiss="modal">ยกเลิก</a>
						<a class="btn width-100 btn-default btn-form-varidate-save" value="Save" data-url="<?= site_url('admin/addUser') ?>">บันทึก</a>
					</div>

				</form>
			</div>
		</div>
	</div>



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
	<script src="<?php echo base_url() . '/assets/plugins/parsley/dist/parsley.js' ?>"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			PageDemo.init();
		});

		$('#modal-edit').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = button.data('id')
			var username = button.data('username')
			var password = button.data('password')
			var level = button.data('level')
			var name = button.data('name')
			var surname = button.data('surname')
			var email = button.data('email')
			var mobile = button.data('mobile')
			var modal = $(this)
			var select = document.getElementById('e_modalLevel');
			select.value = level;
			modal.find('#e_modalId').val(id);
			modal.find('#e_modalUsername').val(username);
			modal.find('#e_modalPassword').val(password);
			modal.find('#e_modalName').val(name);
			modal.find('#e_modalSurname').val(surname);
			modal.find('#e_modalEmail').val(email);
			modal.find('#e_modalMobile').val(mobile);
		})
	</script>
</body>

</html>