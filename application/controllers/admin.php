<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyDto {
	
}

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('functionhelper');
        $this->load->library('session');
    }
    
    public function addMember() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";
			$data['h_back']="";		    
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='p_user';
			$this->datamodel->condition=" where 1=1";		
			$list_user=$this->datamodel->list_data();
			$data['list_user']=$list_user;

	        $this->load->view('/private/addMember', $data);        
		}
    }    


    public function editUser(){
		$user_name=$this->isLogin();
		if($user_name != false){    	
			$this->load->model("datamodel");
			$this->datamodel->table_name='p_user';
			$this->datamodel->pk_name='id';
			$this->datamodel->pk_value=$this->input->post('e_id');
			$obj=new MyDto();
			$obj->username=$this->input->post('e_username');
			$obj->password=$this->input->post('e_password');
			$obj->level=$this->input->post('e_level');
			$obj->name=$this->input->post('e_name');
			$obj->surname=$this->input->post('e_surname');
			$obj->email=$this->input->post('e_email');
			$obj->mobile=$this->input->post('e_mobile');

			$this->datamodel->update($obj);					
	        $this->functionhelper->jsonHeader();
	        $this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('admin/addMember'),$obj);		

		}   
    }  
	
	public function addUser(){
		$user_name=$this->isLogin();
		if($user_name != false){    	
			$username_input=$this->input->post('a_username');
			$this->load->model("datamodel");
			$this->datamodel->table_name='p_user';
			$this->datamodel->condition=" where username='$username_input' " ;		
			$count=$this->datamodel->list_data_count();
			if($count == 0){
				$obj=new MyDto();
				$obj->username=$username_input;
				$obj->password=$this->input->post('a_password');
				$obj->level=$this->input->post('a_level');
				$obj->name=$this->input->post('a_name');
				$obj->surname=$this->input->post('a_surname');
				$obj->email=$this->input->post('a_email');
				$obj->mobile=$this->input->post('a_mobile');

				$this->datamodel->insert($obj);					
				$this->functionhelper->jsonHeader();
				$this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('admin/addMember'),$obj);	
			}else{
				$this->functionhelper->jsonHeader();
				$this->functionhelper->jsonResponseFormFail('มีชื่อ User เดียวกันอยู่ในระบบอยู่แล้ว', 'กรุณาเปลี่ยน user name ใหม่ไม่ให้ซ้ำกัน', '','');	
			}

		}   
    }

	public function deleteUser($id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="user";		  
			$data['h_back']="admin/addMember";  	        
			$this->load->model("datamodel");
			$this->datamodel->table_name='p_user';
			$this->datamodel->pk_name='id';
			$this->datamodel->pk_value=$id;	
			$this->datamodel->delete();
			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('admin/addMember'));      
		}
    }

     

	function isLogin(){				
		$user_name=$this->session->userdata('user_name');
		if($user_name==''){				
			redirect('/user/login');
			return false;
		}else{			
			return $user_name;
		}
	}
    
}
