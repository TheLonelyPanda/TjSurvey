<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyDto {
	
}

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('functionhelper');
        $this->load->library('session');
    }

	public function submitLogin(){
		$user_name=$this->input->post('user_name');
		$pwd=$this->input->post('pwd');
		$this->load->model('datamodel');
		$this->datamodel->table_name='p_user';
		$this->datamodel->condition=" where username='$user_name' and password='$pwd'" ;		
		$list_data=$this->datamodel->list_data();	
		$u_pwd="";
		$u_am_id="";		
		$u_am_name="";
		$user_level="";
		$have_data=false;			
		foreach ($list_data as $row){
	    	$u_am_id= $row->id;
	    	$u_pwd= $row->password;
	    	$user_level=$row->level;
	    	$have_data=true;	    			
		}
		if($have_data && $u_pwd==$pwd){
			$siteURL=site_url('main/index');			
			$this->session->set_userdata('user_name',$user_name);
			$this->session->set_userdata('u_am_id',$u_am_id);
			$this->session->set_userdata('u_level',$user_level);		
			$this->functionhelper->jsonHeader();
        	$this->functionhelper->jsonResponseFormSuccess('เข้าสู่ระบบเรีบบร้อยแล้ว', 'ยินดีต้อนรับคุณ '.$user_name, '',$siteURL);
		}else{
			$this->functionhelper->jsonHeader();
        	$this->functionhelper->jsonResponseFormFail('กรอกข้อมูลไม่ถูกต้องไม่สามารถใช้งานได้', 'กรุณากรอกข้อมูล user name หรือ password ให้ถูกต้อง', '','');
		}							
	}

   
	public function login(){						
		$data['user_name']="";
		$data['h_back']="";
		$data['u_disp']="";
		$data['pwd']="";	
		$data['h_flag']="list";
		$this->load->view('login', $data);
	}

	public function survey(){						
		$data['user_name']="";
		$data['h_back']="";
		$data['u_disp']="";
		$data['pwd']="";	
		$data['h_flag']="list";
		$this->load->model("datamodel");
		$this->datamodel->sql=" select * from provinces ";   
		$data['d_province']=$this->datamodel->list_data_sql();
		$this->datamodel->sql=" select * from districts ";   
		$data['d_districts']=$this->datamodel->list_data_sql();
		$this->datamodel->sql=" select * from amphures ";   
		$data['d_amphures']=$this->datamodel->list_data_sql();
		$this->load->view('survey', $data);
	}
		
	public function submitLogout(){
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('u_am_id');
		$this->session->unset_userdata('p_am_id');
		$this->session->unset_userdata('u_am_name');
		$this->session->unset_userdata('u_level');
		$this->session->unset_userdata('master_id');
		$this->session->unset_userdata('topic_id');						
		$this->functionhelper->jsonHeader();
        $this->functionhelper->jsonResponseFormSuccess('ออกจากระบบเรียบร้อยแล้ว', 'ท่านได้ออกจากระบบเรียบร้อยแล้ว', '',site_url('user/login'));		
	}

	function isLogin(){	
			
		$user_name=$this->session->userdata('u_am_name');
		if($user_name==''){				
			$this->login('w');
			return false;
		}else{			
			return $user_name;
		}
		
		//return "test";			
	}
}
