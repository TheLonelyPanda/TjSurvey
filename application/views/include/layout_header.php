<!DOCTYPE html>
<html>
    <head>
        <title>ระบบสำรวจข้อมูลเพื่อพัฒนาองค์กร</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="<?php echo base_url() . "js/css/cupertino/jquery-ui-1.9.2.custom.min.css" ?>">
        <link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>">        
        <link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">
        
        <link rel="stylesheet" href="<?php echo base_url() . 'css/horpak-style.css' ?>">
        
        <script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-1.12.3.js" ?>"></script>        
        <script type="text/javascript" src="<?php echo base_url() . "newjs/jquery-ui-1.11.4.custom.js" ?>"></script>
        
        <!-- Datatable-->
        
        <script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/custom/app.custom.js' ?>"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
        <!-- Datatable-->        
        
        <style type="text/css">
            body *{
                font-family: 'Itim', cursive;
            }
        </style>
        <script>

        
$(document).ready(function(){
  $('.right.menu.open').on("click",function(e){
    e.preventDefault();
    $('.ui.vertical.menu').toggle();
  });
    
  
});        
        
        </script>
        <link rel="manifest" href="<?= site_url('/manifest.json')?>">
    </head>
    <body>
    <?
$u_level=$this->session->userdata('u_level');
$u_id=$this->session->userdata('u_am_id');
$u_fname=$this->session->userdata('u_am_name');        
    ?>
<div class="ui grid">           



			<div class="computer tablet only row">            	
                <div class="ui inverted fixed menu navbar grid gray stackable">                
			      	<?if($h_back==""){?>
			          <a href="javascript:void(0)" class="brand item"><i class="home icon big"></i>เมนูหลัก</a>			          
			        <?}else{?>  
			          <a href="<?= site_url($h_back) ?>" class="brand item"><i class="reply icon big"></i></a>
						<?if($h_flag != "form"){?>                	
						  	<?if($h_flag != "list_admin"){?>
							  	<a href="<?= site_url('form/address') ?>" class="brand item"><i class="marker  icon  big"> </i>ข้อมูลที่อยู่</a>
							  	<a href="<?= site_url('form/addMember') ?>" class="brand item"><i class="user add  icon  big"> </i>เพิ่มสมาชิก</a>
						  	<?}else{?>
								<a class="item" href="<?=site_url('/admin/qaMasterList')?>"><i class="search  icon  big"> </i>แบบสำรวจ</a>
								<a class="item"><i class="browser  icon  big"> </i>รายงาน</a>
								<a class="item"><i class="setting  icon  big"> </i>ประมาลผล</a>
							<?}?>
			            <?}?>
			        <?}?>  			          
                   <div class="right menu">
						<?if($h_flag=="form"){?>                	
	                    <a href="javascript:void(0)" class="brand item btn-form-save" data-url="<?= site_url($h_submit)?>">
	                    <i class="download icon big inverted yellow"></i>บันทึก</a>
						<?}?>                   
						<?if($u_disp != ''){?>
                   			<a href="javascript:void(0)" class="item btn-form-logout" data-url="<?= site_url('user/submitLogout')?>">
                   			<i class="sign out icon big"> </i> ออกจากระบบ </a>							
                   		<?}else{?>
                   			<a href="<?= site_url('user/formLogin') ?>" class="item"><i class="sign in icon big"> </i> Login เข้าใช้งาน </a>                   			
                   		<?}?>
                   </div>
                </div>
            </div>  



 
			<div class="mobile only row">
			      <div class="ui inverted fixed menu navbar page grid blue">
			      	<?if($h_back==""){?>
			      	 <a href="javascript:void(0)" class="brand item"><i class="home icon big"></i>เมนูหลัก</a>
			        <?}else{?>  
			          <a href="<?= site_url($h_back) ?>" class="brand item"><i class="reply icon big"></i></a>
			        <?}?>
			        <?if($h_flag=="form"){?>
			          <div class="right menu">
	                    <a href="javascript:void(0)" class="brand item btn-form-save" data-url="<?= site_url($h_submit)?>">
	                    <i class="download icon big inverted yellow"></i>บันทึก</a>
			          </div>
			        <?}?>  			          
			          <div class="right menu open">
			              <a href="" class="menu item"><i class="list layout icon big"></i></a>
			          </div>
			      </div>
			      <div class="ui vertical inverted navbar menu page grid  ">
			          <br>
			          <?if($u_disp != ''){?>
						  	<?if($h_flag != "list_admin"){?>
							  	<a href="<?= site_url('form/address') ?>" class="brand item"><i class="marker  icon orange  big"> </i>ข้อมูลที่อยู่</a>
							  	<a href="<?= site_url('form/addMember') ?>" class="brand item"><i class="user add  icon olive big"> </i>เพิ่มสมาชิก</a>
						  	<?}else{?>
								<a class="item" href="<?=site_url('/admin/qaMasterList')?>"><i class="search  icon olive big"> </i>แบบสำรวจ</a>
								<a class="item"><i class="browser  icon green big"> </i>รายงาน</a>
								<a class="item"><i class="setting  icon brown big"> </i>ประมาลผล</a>
							<?}?>
								
								
								
			                   <a href="javascript:void(0)" class="item btn-form-logout" data-url="<?= site_url('user/submitLogout')?>">
			                   <i class="sign out icon big"> </i> ออกจากระบบ </a>			
						<?}else{?>
								<a href="<?= site_url('user/formLogin') ?>" class="item"><i class="sign in icon big"> </i> Login เข้าใช้งาน </a>
								<a href="<?= site_url('main/register') ?>" class="item"><i class="add user icon big inverted orange"> </i> ลงทะเบียน User ใหม่</a>
						<?}?>	
			      </div>
			</div>                                 
</div>
<div class="ui  container pusher" style="margin-top: 60px;">
