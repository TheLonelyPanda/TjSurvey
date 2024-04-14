<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyDto {
	
}

class Main extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('functionhelper');
        $this->load->library('session');
    }


	public function index() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');		
			$data['u_level']=$this->session->userdata('u_level');				
			$data['h_flag']="list";		
			$data['h_back']="";    	 

	        $this->load->view('/private/index', $data);	        
		}
    }


    public function listSurveyAll() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');		
			$data['u_level']=$this->session->userdata('u_level');				
			$data['h_flag']="list";		
			$data['h_back']="";    	    
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->condition=" where master_id is null and status = 'complete' and survey_form = '1' order by profile_id desc";		
			$list_data=$this->datamodel->list_data();
			$data['list_data']=$list_data;

			$this->datamodel->table_name='p_user';
			$this->datamodel->condition=" where 1=1";		
			$list_user=$this->datamodel->list_data();
			$data['list_user']=$list_user;

	        $this->load->view('/private/listSurveyAll', $data);	        
		}
    }

	public function listSurveySpecial() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');		
			$data['u_level']=$this->session->userdata('u_level');				
			$data['h_flag']="list";		
			$data['h_back']="";    	    
			
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->condition=" where master_id is null and status = 'complete' and survey_form = '2'  order by profile_id desc";		
			$list_data=$this->datamodel->list_data();
			$data['list_data']=$list_data;

			$this->datamodel->table_name='p_user';
			$this->datamodel->condition=" where 1=1";		
			$list_user=$this->datamodel->list_data();
			$data['list_user']=$list_user;

	        $this->load->view('/private/listSurveySpecial', $data);	        
		}
    }

	public function deleteData($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="user";		  
			$data['h_back']="admin/addMember";  	        
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_knowledge_laws';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_panic_in_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_trust_for_security';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_sdgs';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_trust_in_justic';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->pk_name='master_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_victims_crimes';
			$this->datamodel->pk_name='master_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('main/listSurveyAll'));      
		}
    }

	public function deleteDataSpecial($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="user";		  
			$data['h_back']="admin/addMember";  	        
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_knowledge_laws';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->datamodel->table_name='survey_trust_in_justic';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profile_id;	
			$this->datamodel->delete();

			$this->functionhelper->jsonHeader();
			$this->functionhelper->jsonResponseFormSuccess('ลบข้อมูลเรียบร้อยแล้ว', 'ท่านได้ทำการลบข้อมูลเรีบบร้อยแล้ว', '',site_url('main/listSurveySpecial'));      
		}
    }

	public function menu() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
		}
		$this->load->view('/private/menu', $data);       
	}

	public function surveyA() {
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
			$this->datamodel->sql=" select * from provinces ";   
			$data['d_province']=$this->datamodel->list_data_sql();
			$this->datamodel->sql=" select * from districts ";   
			$data['d_districts']=$this->datamodel->list_data_sql();
			$this->datamodel->sql=" select * from amphures ";   
			$data['d_amphures']=$this->datamodel->list_data_sql();
		$this->load->view('/private/surveyA', $data);       
	}

	public function surveyB() {
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
		$this->load->view('/private/surveyB', $data);       
	}

	public function surveyC() {
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
		$this->load->view('/private/surveyC', $data);       
	}

	public function surveyD() {
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
		$this->load->view('/private/surveyD', $data);       
	}

	public function surveyE() {
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
		$this->load->view('/private/surveyE', $data);       
	}

	public function surveyF() {
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
		$this->load->view('/private/surveyF', $data);       
	}

	public function surveyG() {
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
		$this->load->view('/private/surveyG', $data);       
	}



	public function surveySpecial($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['d_comeback']=$this->session->userdata('comeback');
			$this->session->unset_userdata('comeback');
			$data['u_disp']=$this->session->userdata('user_name');
			$data['u_level']=$this->session->userdata('u_level');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	        
			$this->load->model("datamodel");
			$this->datamodel->sql=" select * from provinces ";   
			$data['d_province']=$this->datamodel->list_data_sql();
			$this->datamodel->sql=" select * from districts ";   
			$data['d_districts']=$this->datamodel->list_data_sql();
			$this->datamodel->sql=" select * from amphures ";   
			$data['d_amphures']=$this->datamodel->list_data_sql();
			$data['u_send_profile']=$profile_id;
			if ($profile_id == '0') {
				$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'siamjobit_tjsurvey' AND TABLE_NAME = 'survey_profile'; ";   
				$u_now_id=$this->datamodel->first_row_data_sql();
				$data['u_now_id']=$u_now_id->AUTO_INCREMENT;
				
			}else{
				$data['u_now_id']=$profile_id;
			}
			$profileCode=$this->chkProfileCodeFirst($data['u_now_id']);
			if($profileCode != null || $profileCode != ''){
				$data['u_profile_code'] = $profileCode;

				$this->datamodel->sql="select * from survey_profile where profile_code = '".$profileCode."'";		
				$profile_data=$this->datamodel->first_row_data_sql();

				$this->datamodel->sql="select * from p_user where id = '".$profile_data->create_by."'";		
				$usernameQuery=$this->datamodel->first_row_data_sql();
				$data['user_name_sur']=$usernameQuery->name." ".$usernameQuery->surname;

			}else{
				
				$this->datamodel->sql="select * from p_user where username = '".$this->session->userdata('user_name')."'";		
				$usernameQuery=$this->datamodel->first_row_data_sql();
				$data['user_name_sur']=$usernameQuery->name." ".$usernameQuery->surname;
				$data['u_profile_code'] ='';
			}

			$data['u_check_new_survey_profile']=$this->chkHave($data['u_now_id'],'survey_profile');
			if($data['u_check_new_survey_profile'] == 0){
				$objSurveyProfile=new MyDto();
				$objSurveyProfile->profile_id = $profile_id;
				$objSurveyProfile->master_id = '';
				$objSurveyProfile->A2 = '';
				$objSurveyProfile->A3 = '';
				$objSurveyProfile->A4 = '';
				$objSurveyProfile->A4_1 = '';
				$objSurveyProfile->A4_2 = '';
				$objSurveyProfile->A4_3 = '';
				$objSurveyProfile->A4_4 = '';
				$objSurveyProfile->A4_5 = '';
				$objSurveyProfile->{'1_1_1'} = '';
				$objSurveyProfile->{'1_1_2'} = '';
				$objSurveyProfile->{'1_1_3'} = '';
				$objSurveyProfile->{'1_1_4'} = '';
				$objSurveyProfile->{'1_1_4_text'} = '';
				$objSurveyProfile->{'1_1_5'} = '';
				$objSurveyProfile->{'1_1_5_text'} = '';
				$objSurveyProfile->{'1_1_6'} = '';
				$objSurveyProfile->{'1_1_7'} = '';
				$objSurveyProfile->{'1_1_7_C1'} = '';
				$objSurveyProfile->{'1_1_7_C2'} = '';
				$objSurveyProfile->{'1_1_7_C3'} = '';
				$objSurveyProfile->{'1_1_7_C4'} = '';
				$objSurveyProfile->{'1_1_7_C5'} = '';
				$objSurveyProfile->{'1_1_7_C6'} = '';
				$objSurveyProfile->{'1_1_7_C7'} = '';
				$objSurveyProfile->{'1_1_7_C8'} = '';
				$objSurveyProfile->{'1_1_7_C9'} = '';
				$objSurveyProfile->{'1_1_7_C9_text'} = '';
				$objSurveyProfile->{'1_1_7_1'} = '';
				$objSurveyProfile->{'1_2'} = '';
				$objSurveyProfile->{'1_2_text'} = '';
				$objSurveyProfile->{'1_3'} = '';
				$objSurveyProfile->{'1_3_text'} = '';
				$data['d_surveyProfile']=$objSurveyProfile;
			}else{
				$this->datamodel->sql="select * from survey_profile where profile_id='$profile_id'";
				$data['d_surveyProfile']=$this->datamodel->first_row_data_sql();
			}
			
			if ($profile_id == '0') {
				$this->initDataSpecial($data['u_now_id']);
			}

			
		
		}
		$this->load->view('/private/surveySpecial', $data);       
	}

	public function initData($u_now_id){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$u_now_id;
			$objProfile=new MyDto();
			$objProfile->A2 = $this->checkEmpty($this->input->post('A2'));
			$objProfile->A3 = $this->checkEmpty($this->input->post('A3'));
			$objProfile->A4 = $this->checkEmpty($this->input->post('A4'));
			$objProfile->profile_code = '';
			if($this->checkEmpty($this->input->post('A4'))=='1'){
				$objProfile->A4_1 = 'กรุงเทพมหานคร';
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id_1'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id_1'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_1_text_3'));
				$objProfile->A4_5 = '';
			}else{
				$objProfile->A4_1 = $this->checkEmpty($this->input->post('province_id'));
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_2_text_4'));
				$objProfile->A4_5 = $this->checkEmpty($this->input->post('A4_2_text_5'));
			}
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_1_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_1_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_1_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_1_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_1_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_1_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_1_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_1_6'));
			$objProfile->{'1_1_7'} = $this->checkEmpty($this->input->post('1_1_7'));
			$objProfile->{'1_1_7_C1'} = $this->checkEmpty($this->input->post('1_1_7_C1'));
			$objProfile->{'1_1_7_C2'} = $this->checkEmpty($this->input->post('1_1_7_C2'));
			$objProfile->{'1_1_7_C3'} = $this->checkEmpty($this->input->post('1_1_7_C3'));
			$objProfile->{'1_1_7_C4'} = $this->checkEmpty($this->input->post('1_1_7_C4'));
			$objProfile->{'1_1_7_C5'} = $this->checkEmpty($this->input->post('1_1_7_C5'));
			$objProfile->{'1_1_7_C6'} = $this->checkEmpty($this->input->post('1_1_7_C6'));
			$objProfile->{'1_1_7_C7'} = $this->checkEmpty($this->input->post('1_1_7_C7'));
			$objProfile->{'1_1_7_C8'} = $this->checkEmpty($this->input->post('1_1_7_C8'));
			$objProfile->{'1_1_7_C9'} = $this->checkEmpty($this->input->post('1_1_7_C9'));
			$objProfile->{'1_1_7_C9_text'} = $this->checkEmpty($this->input->post('1_1_7_C9_text'));
			$objProfile->{'1_1_7_1'} = $this->checkEmpty($this->input->post('1_1_7_1'));
			$objProfile->{'1_2'} = $this->checkEmpty($this->input->post('1_2'));
			$objProfile->{'1_2_text'} = $this->checkEmpty($this->input->post('1_2_text'));
			$objProfile->{'1_3'} = $this->checkEmpty($this->input->post('1_3'));
			$objProfile->{'1_3_text'} = $this->checkEmpty($this->input->post('1_3_text'));
			$objProfile->survey_form = "1";
			if($this->chkHave($u_now_id,'survey_profile')=='0'){
				$objProfile->create_by = $this->session->userdata('u_am_id');
				$this->datamodel->insert($objProfile);
			}else{
				$objProfile->update_by = $this->session->userdata('u_am_id');
				$this->datamodel->update($objProfile);
			}	
			$objlist=new MyDto();
			$objlist->running_num = 0;
			$objlist->profile_id = $u_now_id;
			$this->saveSurvey1($u_now_id,1,$objlist,'');
			$this->saveSurvey1S4(1,$objlist,'');
			$this->saveSurvey2($u_now_id,'',"1");
			$this->saveSurvey3($u_now_id,'');
			$this->saveSurvey4($u_now_id,'');
			$this->saveSurvey5($u_now_id,'');
			$this->saveSurvey6($u_now_id,'',"1");
			$this->saveSurvey7($u_now_id,'');

		} 
    }

	public function initDataSpecial($u_now_id){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$u_now_id;
			$objProfile=new MyDto();
			$objProfile->A2 = $this->checkEmpty($this->input->post('A2'));
			$objProfile->A3 = $this->checkEmpty($this->input->post('A3'));
			$objProfile->A4 = $this->checkEmpty($this->input->post('A4'));
			$objProfile->profile_code = '';
			if($this->checkEmpty($this->input->post('A4'))=='1'){
				$objProfile->A4_1 = 'กรุงเทพมหานคร';
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id_1'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id_1'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_1_text_3'));
				$objProfile->A4_5 = '';
			}else{
				$objProfile->A4_1 = $this->checkEmpty($this->input->post('province_id'));
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_2_text_4'));
				$objProfile->A4_5 = $this->checkEmpty($this->input->post('A4_2_text_5'));
			}
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_1_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_1_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_1_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_1_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_1_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_1_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_1_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_1_6'));
			$objProfile->{'1_1_7'} = $this->checkEmpty($this->input->post('1_1_7'));
			$objProfile->{'1_1_7_C1'} = $this->checkEmpty($this->input->post('1_1_7_C1'));
			$objProfile->{'1_1_7_C2'} = $this->checkEmpty($this->input->post('1_1_7_C2'));
			$objProfile->{'1_1_7_C3'} = $this->checkEmpty($this->input->post('1_1_7_C3'));
			$objProfile->{'1_1_7_C4'} = $this->checkEmpty($this->input->post('1_1_7_C4'));
			$objProfile->{'1_1_7_C5'} = $this->checkEmpty($this->input->post('1_1_7_C5'));
			$objProfile->{'1_1_7_C6'} = $this->checkEmpty($this->input->post('1_1_7_C6'));
			$objProfile->{'1_1_7_C7'} = $this->checkEmpty($this->input->post('1_1_7_C7'));
			$objProfile->{'1_1_7_C8'} = $this->checkEmpty($this->input->post('1_1_7_C8'));
			$objProfile->{'1_1_7_C9'} = $this->checkEmpty($this->input->post('1_1_7_C9'));
			$objProfile->{'1_1_7_C9_text'} = $this->checkEmpty($this->input->post('1_1_7_C9_text'));
			$objProfile->{'1_1_7_1'} = $this->checkEmpty($this->input->post('1_1_7_1'));
			$objProfile->{'1_2'} = $this->checkEmpty($this->input->post('1_2'));
			$objProfile->{'1_2_text'} = $this->checkEmpty($this->input->post('1_2_text'));
			$objProfile->{'1_3'} = $this->checkEmpty($this->input->post('1_3'));
			$objProfile->{'1_3_text'} = $this->checkEmpty($this->input->post('1_3_text'));
			$objProfile->survey_form = "2";
			if($this->chkHave($u_now_id,'survey_profile')=='0'){
				$objProfile->create_by = $this->session->userdata('u_am_id');
				$this->datamodel->insert($objProfile);
			}else{
				$objProfile->update_by = $this->session->userdata('u_am_id');
				$this->datamodel->update($objProfile);
			}	
			$this->saveSurvey2($u_now_id,'',"2");
			$this->saveSurvey6($u_now_id,'',"2");

		} 
    }

	public function checkEmpty($string){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			if($string != '99'){
				if($string == '0'||$string == null){
					return '';
				}
			}
		}
		return $string;
	}

	public function checkEmptyS($string){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			if($string != '99'){
				if($string == null){
					return '';
				}
			}
		}
		return $string;
	}

	public function saveSurvey($hidden){
		$user_name=$this->isLogin();
		if($user_name != false){    
			$profileCode = '';
			$provinceCode = '';
			$profileId = $this->input->post('1_text');
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objProfile=new MyDto();
			
			$objProfile->A2 = $this->checkEmpty($this->input->post('A2'));
			$objProfile->A3 = $this->checkEmpty($this->input->post('A3'));
			$objProfile->A4 = $this->checkEmpty($this->input->post('A4'));
			if($this->checkEmpty($this->input->post('A4'))=='1'){
				$objProfile->A4_1 = 'กรุงเทพมหานคร';
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id_1'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id_1'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_1_text_3'));
				$objProfile->A4_5 = '';
			}else{
				$objProfile->A4_1 = $this->checkEmpty($this->input->post('province_id'));
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_2_text_4'));
				$objProfile->A4_5 = $this->checkEmpty($this->input->post('A4_2_text_5'));
			}
			
			if('' == $this->chkProfileCodeFirst($profileId)){
				$provinceCode = $this->queryProviceId($objProfile->A4_1);
				$profileCode = $provinceCode.date("Ymd").$profileId;
				$objProfile->profile_code = $profileCode;
			}
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_1_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_1_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_1_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_1_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_1_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_1_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_1_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_1_6'));
			$objProfile->{'1_1_7'} = $this->checkEmpty($this->input->post('1_1_7'));
			$objProfile->{'1_1_7_C1'} = $this->checkEmpty($this->input->post('1_1_7_C1'));
			$objProfile->{'1_1_7_C2'} = $this->checkEmpty($this->input->post('1_1_7_C2'));
			$objProfile->{'1_1_7_C3'} = $this->checkEmpty($this->input->post('1_1_7_C3'));
			$objProfile->{'1_1_7_C4'} = $this->checkEmpty($this->input->post('1_1_7_C4'));
			$objProfile->{'1_1_7_C5'} = $this->checkEmpty($this->input->post('1_1_7_C5'));
			$objProfile->{'1_1_7_C6'} = $this->checkEmpty($this->input->post('1_1_7_C6'));
			$objProfile->{'1_1_7_C7'} = $this->checkEmpty($this->input->post('1_1_7_C7'));
			$objProfile->{'1_1_7_C8'} = $this->checkEmpty($this->input->post('1_1_7_C8'));
			$objProfile->{'1_1_7_C9'} = $this->checkEmpty($this->input->post('1_1_7_C9'));
			$objProfile->{'1_1_7_C9_text'} = $this->checkEmpty($this->input->post('1_1_7_C9_text'));
			$objProfile->{'1_1_7_1'} = $this->checkEmpty($this->input->post('1_1_7_1'));
			$objProfile->{'1_2'} = $this->checkEmpty($this->input->post('1_2'));
			$objProfile->{'1_2_text'} = $this->checkEmpty($this->input->post('1_2_text'));
			$objProfile->{'1_3'} = $this->checkEmpty($this->input->post('1_3'));
			$objProfile->{'1_3_text'} = $this->checkEmpty($this->input->post('1_3_text'));
			$objProfile->survey_form = "1";
			if($hidden == 'false'){
				$objProfile->status = 'complete';
			}
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$objProfile->create_by = $this->session->userdata('u_am_id');
				$this->datamodel->insert($objProfile);
			}else{
				$objProfile->update_by = $this->session->userdata('u_am_id');
				$this->datamodel->update($objProfile);
			}	

			$objlist=new MyDto();
			$objlist->running_num = 0;
			$objlist->profile_id = $profileId;
			$this->saveSurvey1($profileId,1,$objlist,$provinceCode);

			$this->datamodel->table_name='survey_victims';
			$this->datamodel->condition='where master_id='.$profileId; 
			$listData=$this->datamodel->list_data();

			for ($i=2; $i <= count($listData)+1; $i++) { 
				$this->saveSurvey1($profileId,$i,$listData[$i-2],$provinceCode);
			}
			$this->saveSurvey2($profileId,$profileCode,"1");
			$this->saveSurvey3($profileId,$profileCode);
			$this->saveSurvey4($profileId,$profileCode);
			$this->saveSurvey5($profileId,$profileCode);
			$this->saveSurvey6($profileId,$profileCode,"1");
			$this->saveSurvey7($profileId,$profileCode);
			

			if($hidden == 'false'){
				$this->clearProfileCode($profileId);
			}
			if($hidden != 'true'){
				$this->functionhelper->jsonHeader();
				$this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/listSurveyAll'),$objProfile);	
			}
			

		} 
    }

	public function saveSurveySpecial($hidden){
		$user_name=$this->isLogin();
		if($user_name != false){    
			$profileCode = '';
			$provinceCode = '';
			$profileId = $this->input->post('1_text');
			$this->load->model("datamodel");
			$this->datamodel->table_name='survey_profile';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$objProfile=new MyDto();
			
			$objProfile->A2 = $this->checkEmpty($this->input->post('A2'));
			$objProfile->A3 = $this->checkEmpty($this->input->post('A3'));
			$objProfile->A4 = $this->checkEmpty($this->input->post('A4'));
			if($this->checkEmpty($this->input->post('A4'))=='1'){
				$objProfile->A4_1 = 'กรุงเทพมหานคร';
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id_1'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id_1'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_1_text_3'));
				$objProfile->A4_5 = '';
			}else{
				$objProfile->A4_1 = $this->checkEmpty($this->input->post('province_id'));
				$objProfile->A4_2 = $this->checkEmpty($this->input->post('amphure_id'));
				$objProfile->A4_3 = $this->checkEmpty($this->input->post('district_id'));
				$objProfile->A4_4 = $this->checkEmpty($this->input->post('A4_2_text_4'));
				$objProfile->A4_5 = $this->checkEmpty($this->input->post('A4_2_text_5'));
			}
			
			if('' == $this->chkProfileCodeFirst($profileId)){
				$provinceCode = $this->queryProviceId($objProfile->A4_1);
				$profileCode = $provinceCode.date("Ymd").$profileId;
				$objProfile->profile_code = $profileCode;
			}
			$objProfile->{'1_1_1'} = $this->checkEmpty($this->input->post('1_1_1'));
			$objProfile->{'1_1_2'} = $this->checkEmpty($this->input->post('1_1_2'));
			$objProfile->{'1_1_3'} = $this->checkEmpty($this->input->post('1_1_3'));
			$objProfile->{'1_1_4'} = $this->checkEmpty($this->input->post('1_1_4'));
			$objProfile->{'1_1_4_text'} = $this->checkEmpty($this->input->post('1_1_4_text'));
			$objProfile->{'1_1_5'} = $this->checkEmpty($this->input->post('1_1_5'));
			$objProfile->{'1_1_5_text'} = $this->checkEmpty($this->input->post('1_1_5_text'));
			$objProfile->{'1_1_6'} = $this->checkEmpty($this->input->post('1_1_6'));
			$objProfile->{'1_1_7'} = $this->checkEmpty($this->input->post('1_1_7'));
			$objProfile->{'1_1_7_C1'} = $this->checkEmpty($this->input->post('1_1_7_C1'));
			$objProfile->{'1_1_7_C2'} = $this->checkEmpty($this->input->post('1_1_7_C2'));
			$objProfile->{'1_1_7_C3'} = $this->checkEmpty($this->input->post('1_1_7_C3'));
			$objProfile->{'1_1_7_C4'} = $this->checkEmpty($this->input->post('1_1_7_C4'));
			$objProfile->{'1_1_7_C5'} = $this->checkEmpty($this->input->post('1_1_7_C5'));
			$objProfile->{'1_1_7_C6'} = $this->checkEmpty($this->input->post('1_1_7_C6'));
			$objProfile->{'1_1_7_C7'} = $this->checkEmpty($this->input->post('1_1_7_C7'));
			$objProfile->{'1_1_7_C8'} = $this->checkEmpty($this->input->post('1_1_7_C8'));
			$objProfile->{'1_1_7_C9'} = $this->checkEmpty($this->input->post('1_1_7_C9'));
			$objProfile->{'1_1_7_C9_text'} = $this->checkEmpty($this->input->post('1_1_7_C9_text'));
			$objProfile->{'1_1_7_1'} = $this->checkEmpty($this->input->post('1_1_7_1'));
			$objProfile->{'1_2'} = $this->checkEmpty($this->input->post('1_2'));
			$objProfile->{'1_2_text'} = $this->checkEmpty($this->input->post('1_2_text'));
			$objProfile->{'1_3'} = $this->checkEmpty($this->input->post('1_3'));
			$objProfile->{'1_3_text'} = $this->checkEmpty($this->input->post('1_3_text'));
			$objProfile->survey_form = "2";
			if($hidden == 'false'){
				$objProfile->status = 'complete';
			}
			if($this->chkHave($profileId,'survey_profile')=='0'){
				$objProfile->create_by = $this->session->userdata('u_am_id');
				$this->datamodel->insert($objProfile);
			}else{
				$objProfile->update_by = $this->session->userdata('u_am_id');
				$this->datamodel->update($objProfile);
			}	


			$this->saveSurvey2($profileId,$profileCode,"2");
			$this->saveSurvey6($profileId,$profileCode,"2");
			

			if($hidden == 'false'){
				$this->clearProfileCode($profileId);
			}
			if($hidden != 'true'){
				$this->functionhelper->jsonHeader();
				$this->functionhelper->jsonDataResponseFull(true,'บันทึกข้อมูลเรียบร้อยแล้ว', '', site_url('main/listSurveySpecial'),$objProfile);	
			}
			

		} 
    }

	public function clearProfileCode($profileId){
		$user_name=$this->isLogin();
		if($user_name != false){ 
			$this->load->model("datamodel");
			$this->datamodel->sql="select *, DATE_FORMAT(Create_DTM, '%Y%m%d') AS formatted_date from survey_profile where profile_id = ".$profileId; 
			$dateData=$this->datamodel->first_row_data_sql();
			$dateFormat = $dateData->formatted_date;
			$provinceCode = $this->queryProviceId($dateData->A4_1);

			$this->datamodel->table_name='survey_profile';
			$this->datamodel->condition='where master_id='.$profileId.' or profile_id = '.$profileId; 
			$listData=$this->datamodel->list_data();

			
			for ($i=1; $i <= count($listData); $i++) { 
				$profileIdIn = $listData[$i-1]->profile_id;
				$obj=new MyDto();
				$obj->profile_code = $provinceCode.$dateFormat.$profileIdIn;
				$this->datamodel->table_name='survey_profile';
				$this->datamodel->pk_name='profile_id';
				$this->datamodel->pk_value=$profileIdIn;
				$this->datamodel->update($obj);

				$this->datamodel->table_name='survey_victims';
				$this->datamodel->pk_name='profile_id';
				$this->datamodel->pk_value=$profileIdIn;
				$this->datamodel->update($obj);

				$this->datamodel->table_name='survey_victims_crimes';
				$this->datamodel->pk_name='profile_id';
				$this->datamodel->pk_value=$profileIdIn;
				$this->datamodel->update($obj);
			}

			$objAll=new MyDto();
			$objAll->profile_code = $provinceCode.$dateFormat.$profileId;
			$this->datamodel->table_name='survey_knowledge_laws';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$this->datamodel->update($objAll);

			$this->datamodel->table_name='survey_panic_in_crimes';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$this->datamodel->update($objAll);

			$this->datamodel->table_name='survey_sdgs';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$this->datamodel->update($objAll);

			$this->datamodel->table_name='survey_trust_for_security';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$this->datamodel->update($objAll);

			$this->datamodel->table_name='survey_trust_in_justic';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$this->datamodel->update($objAll);

			$this->datamodel->table_name='survey_satisfaction';
			$this->datamodel->pk_name='profile_id';
			$this->datamodel->pk_value=$profileId;
			$this->datamodel->update($objAll);


		} 
    }

	public function seachRunning($profile_id,$master_id){				
		$user_name=$this->isLogin();
		$running = 0;
		if($user_name != false){
			$this->load->model("datamodel");
			if($master_id == 'IS NULL'){
				$this->datamodel->sql=" select running_num from survey_victims where profile_id = ".$profile_id." and master_id IS NULL ; "; 
			}else{
				$this->datamodel->sql=" select running_num from survey_victims where profile_id = ".$profile_id." and master_id = ".$master_id." ; "; 
			}
			
			$running=$this->datamodel->first_row_data_sql();
		}
		return $running->running_num;
	}
       

	public function export($profile_id) {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	      
			
			$this->load->library('zip');
			$this->load->dbutil();
			$this->load->helper('file');
			$this->load->helper('download');
			$this->load->model("datamodel");

			$this->datamodel->sql="select * from survey_profile where profile_id='$profile_id' or master_id = '$profile_id'";
			$profileQueryData=$this->datamodel->list_data_sql_export();
			$profileData = $this->dbutil->csv_from_result($profileQueryData);
			write_file('./temp/survey_profile.csv', $profileData);

			$this->datamodel->sql="select * from survey_victims where profile_id='$profile_id' or master_id = '$profile_id'";
			$victimsQueryData=$this->datamodel->list_data_sql_export();
			$victimsData = $this->dbutil->csv_from_result($victimsQueryData);
			write_file('./temp/survey_victims.csv', $victimsData);

			$this->datamodel->sql="select * from survey_victims_crimes where profile_id='$profile_id' or master_id = '$profile_id'";
			$crimesQueryData=$this->datamodel->list_data_sql_export();
			$crimesData = $this->dbutil->csv_from_result($crimesQueryData);
			write_file('./temp/survey_victims_crimes.csv', $crimesData);

			$this->datamodel->sql="select * from survey_knowledge_laws where profile_id='$profile_id'";
			$lawsQueryData=$this->datamodel->list_data_sql_export();
			$lawsData = $this->dbutil->csv_from_result($lawsQueryData);
			write_file('./temp/survey_knowledge_laws.csv', $lawsData);

			$this->datamodel->sql="select * from survey_panic_in_crimes where profile_id='$profile_id'";
			$panicQueryData=$this->datamodel->list_data_sql_export();
			$panicData = $this->dbutil->csv_from_result($panicQueryData);
			write_file('./temp/survey_panic_in_crimes.csv', $panicData);

			$this->datamodel->sql="select * from survey_trust_for_security where profile_id='$profile_id'";
			$securityQueryData=$this->datamodel->list_data_sql_export();
			$securityData = $this->dbutil->csv_from_result($securityQueryData);
			write_file('./temp/survey_trust_for_security.csv', $securityData);

			$this->datamodel->sql="select * from survey_sdgs where profile_id='$profile_id'";
			$sdgsQueryData=$this->datamodel->list_data_sql_export();
			$sdgsData = $this->dbutil->csv_from_result($sdgsQueryData);
			write_file('./temp/survey_sdgs.csv', $sdgsData);

			$this->datamodel->sql="select * from survey_trust_in_justic where profile_id='$profile_id'";
			$justicQueryData=$this->datamodel->list_data_sql_export();
			$justicData = $this->dbutil->csv_from_result($justicQueryData);
			write_file('./temp/survey_trust_in_justic.csv', $justicData);

			// Zip the CSV files
			$zip_file_path = './temp/csv_'.$profile_id.'.zip';
			$this->zip->add_data('survey_profile.csv', $profileData);
			$this->zip->add_data('survey_victims.csv', $victimsData);
			$this->zip->add_data('survey_victims_crimes.csv', $crimesData);
			$this->zip->add_data('survey_knowledge_laws.csv', $lawsData);
			$this->zip->add_data('survey_panic_in_crimes.csv', $panicData);
			$this->zip->add_data('survey_trust_for_security.csv', $securityData);
			$this->zip->add_data('survey_sdgs.csv', $sdgsData);
			$this->zip->add_data('survey_trust_in_justic.csv', $justicData);
			$this->zip->archive($zip_file_path);

			// Send the zip file as response
			$zip_file_data = file_get_contents($zip_file_path);
			force_download('csv_'.$profile_id.'.zip', $zip_file_data);

		}
    }

	public function exportAll() {
		$user_name=$this->isLogin();
		if($user_name != false){
			$data['u_disp']=$this->session->userdata('user_name');					
			$data['h_flag']="list";		  
			$data['h_back']="main/index";  	      
			
			$this->load->library('zip');
			$this->load->dbutil();
			$this->load->helper('file');
			$this->load->helper('download');
			$this->load->model("datamodel");

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_C1`, p.`1_1_7_C2`, p.`1_1_7_C3`, p.`1_1_7_C4`, p.`1_1_7_C5`, p.`1_1_7_C6`, p.`1_1_7_C7`, p.`1_1_7_C8`, p.`1_1_7_C9`, p.`1_1_7_C9_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, p.create_by, p.Create_DTM, p.update_by, p.Update_DTM ,p.survey_form 
			FROM survey_profile p WHERE p.status = 'complete' 
			UNION 
			SELECT m.profile_id, m.master_id, m.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, m.`1_1_1` , m.`1_1_2` , m.`1_1_3` , m.`1_1_4` , m.`1_1_4_text` , m.`1_1_5` , m.`1_1_5_text` , m.`1_1_6` , m.`1_1_7` , m.`1_1_7_C1`, m.`1_1_7_C2`, m.`1_1_7_C3`, m.`1_1_7_C4`, m.`1_1_7_C5`, m.`1_1_7_C6`, m.`1_1_7_C7`, m.`1_1_7_C8`, m.`1_1_7_C9`, m.`1_1_7_C9_text`, m.`1_1_7_1` , m.`1_2` , m.`1_2_text` , m.`1_3` , m.`1_3_text` , m.create_by, m.Create_DTM, m.update_by, m.Update_DTM ,m.survey_form 
			FROM survey_profile p, survey_profile m WHERE p.status = 'complete' AND m.master_id = p.profile_id 
			ORDER BY profile_id;";
			$profileQueryData=$this->datamodel->list_data_sql_export();
			$profileData = $this->dbutil->csv_from_result($profileQueryData);
			write_file('./temp/survey_profile.csv', $profileData);

			$this->datamodel->sql="SELECT sv.profile_id, sv.master_id, sv.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_3`, sv.Create_DTM, sv.Update_DTM, sv.S2_1, sv.S2_2, sv.S2_3, sv.S2_4
			FROM survey_victims sv , survey_profile p where (sv.profile_id = p.profile_id Or sv.master_id = p.profile_id) and p.status = 'complete';";
			$victimsQueryData=$this->datamodel->list_data_sql_export();
			$victimsData = $this->dbutil->csv_from_result($victimsQueryData);
			write_file('./temp/survey_victims.csv', $victimsData);

			$this->datamodel->sql="SELECT svc.profile_id, svc.master_id, svc.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_3`, svc.Create_DTM, svc.Update_DTM, svc.S4_4_1, svc.S4_4_1_text, svc.S4_4_2, svc.S4_4_2_text, svc.S4_4_3, svc.S4_4_3_1_1, svc.S4_4_3_1_2, svc.S4_4_3_1_3, svc.S4_4_3_1_4, svc.S4_4_3_1_5, svc.S4_4_3_1_6, svc.S4_4_3_1_7, svc.S4_4_3_1_8, svc.S4_4_3_1_9, svc.S4_4_3_1_10, svc.S4_4_3_2, svc.S4_4_3_2_text, svc.S4_4_3_3_1, svc.S4_4_3_3_2, svc.S4_4_3_3_3, svc.S4_4_3_3_4, svc.S4_4_3_3_5, svc.S4_4_3_3_6, svc.S4_4_3_3_7, svc.S4_4_3_3_8, svc.S4_4_3_3_1_text, svc.S4_4_3_3_2_text, svc.S4_4_3_3_3_text, svc.S4_4_3_3_4_text, svc.S4_4_3_3_5_text, svc.S4_4_3_3_6_text, svc.S4_4_3_3_7_text, svc.S4_4_4_1, svc.S4_4_4_2, svc.S4_4_4_3, svc.S4_4_4_4, svc.S4_4_4_5, svc.S4_4_4_6, svc.S4_4_5, svc.S4_4_6, svc.S4_4_6_1, svc.S4_4_6_1_text, svc.S4_4_6_2_1, svc.S4_4_6_2_2, svc.S4_4_6_2_3, svc.S4_4_6_2_4, svc.S4_4_6_2_5, svc.S4_4_6_2_6, svc.S4_4_6_2_7, svc.S4_4_6_2_8, svc.S4_4_6_2_9, svc.S4_4_6_2_10, svc.S4_4_6_2_11, svc.S4_4_6_2_12, svc.S4_4_6_2_13, svc.S4_4_6_2_14, svc.S4_4_6_2_15, svc.S4_4_6_2_16, svc.S4_4_6_2_17, svc.S4_4_6_2_18, svc.S4_4_6_2_18_text, svc.S4_4_7, svc.S4_4_7_text
			FROM survey_victims_crimes svc , survey_profile p where (svc.profile_id = p.profile_id Or svc.master_id = p.profile_id) and svc.S4_4_1 <> '' and p.status = 'complete';";
			$crimesQueryData=$this->datamodel->list_data_sql_export();
			$crimesData = $this->dbutil->csv_from_result($crimesQueryData);
			write_file('./temp/survey_victims_crimes.csv', $crimesData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_C1`, p.`1_1_7_C2`, p.`1_1_7_C3`, p.`1_1_7_C4`, p.`1_1_7_C5`, p.`1_1_7_C6`, p.`1_1_7_C7`, p.`1_1_7_C8`, p.`1_1_7_C9`, p.`1_1_7_C9_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, kl.S2_1_1, kl.S2_1_2, kl.S2_1_3, kl.S2_1_4, kl.S2_1_5, kl.S2_1_6, kl.S2_1_7, kl.S2_1_8, kl.S2_1_9, kl.S2_1_10, kl.S2_1_11, kl.S2_1_12, kl.S2_2_1, kl.S2_2_2, kl.S2_2_3, kl.S2_2_4, kl.S2_2_5, kl.S2_2_6, kl.S2_2_7, kl.S2_2_8, kl.S2_3_1, kl.S2_3_2, kl.S2_3_3, kl.S2_3_4, kl.S2_3_5, kl.S2_3_6, kl.S2_3_7, kl.S2_3_8, kl.S2_3_9, kl.S2_4, kl.S2_5, kl.Create_DTM, kl.Update_DTM ,kl.survey_form 
			FROM survey_profile p , survey_knowledge_laws kl where p.profile_id = kl.profile_id and p.status = 'complete';";
			$lawsQueryData=$this->datamodel->list_data_sql_export();
			$lawsData = $this->dbutil->csv_from_result($lawsQueryData);
			write_file('./temp/survey_knowledge_laws.csv', $lawsData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_C1`, p.`1_1_7_C2`, p.`1_1_7_C3`, p.`1_1_7_C4`, p.`1_1_7_C5`, p.`1_1_7_C6`, p.`1_1_7_C7`, p.`1_1_7_C8`, p.`1_1_7_C9`, p.`1_1_7_C9_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, pic.S2_2_1_1, pic.S2_2_1_2, pic.S2_2_1_3, pic.S2_2_1_4, pic.Create_DTM, pic.Update_DTM
			FROM survey_profile p , survey_panic_in_crimes pic where p.profile_id = pic.profile_id and p.status = 'complete';";
			$panicQueryData=$this->datamodel->list_data_sql_export();
			$panicData = $this->dbutil->csv_from_result($panicQueryData);
			write_file('./temp/survey_panic_in_crimes.csv', $panicData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_C1`, p.`1_1_7_C2`, p.`1_1_7_C3`, p.`1_1_7_C4`, p.`1_1_7_C5`, p.`1_1_7_C6`, p.`1_1_7_C7`, p.`1_1_7_C8`, p.`1_1_7_C9`, p.`1_1_7_C9_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, tfs.S2_2_1, tfs.S2_2_2, tfs.S2_2_3, tfs.Create_DTM, tfs.Update_DTM
			FROM survey_profile p , survey_trust_for_security tfs where p.profile_id = tfs.profile_id and p.status = 'complete';";
			$securityQueryData=$this->datamodel->list_data_sql_export();
			$securityData = $this->dbutil->csv_from_result($securityQueryData);
			write_file('./temp/survey_trust_for_security.csv', $securityData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_C1`, p.`1_1_7_C2`, p.`1_1_7_C3`, p.`1_1_7_C4`, p.`1_1_7_C5`, p.`1_1_7_C6`, p.`1_1_7_C7`, p.`1_1_7_C8`, p.`1_1_7_C9`, p.`1_1_7_C9_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, s.S2_2_1, s.S2_2_2, s.Create_DTM, s.Update_DTM
			FROM survey_profile p , survey_sdgs s where p.profile_id = s.profile_id and p.status = 'complete';";
			$sdgsQueryData=$this->datamodel->list_data_sql_export();
			$sdgsData = $this->dbutil->csv_from_result($sdgsQueryData);
			write_file('./temp/survey_sdgs.csv', $sdgsData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_C1`, p.`1_1_7_C2`, p.`1_1_7_C3`, p.`1_1_7_C4`, p.`1_1_7_C5`, p.`1_1_7_C6`, p.`1_1_7_C7`, p.`1_1_7_C8`, p.`1_1_7_C9`, p.`1_1_7_C9_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, tij.S2_1_1, tij.S2_1_2, tij.S2_1_3, tij.S2_1_4, tij.S2_2_1, tij.S2_2_2, tij.S2_2_3, tij.S2_2_4, tij.S2_3_1, tij.S2_3_2, tij.S2_3_3, tij.S2_3_4, tij.S2_4_1, tij.S2_4_2, tij.S2_4_3, tij.S2_4_4, tij.S2_5, tij.S3_1_1, tij.S3_1_2, tij.S3_1_3, tij.S3_1_4, tij.S3_1_5, tij.S3_2_1, tij.S3_2_2, tij.S3_2_3, tij.S3_2_4, tij.S3_2_5, tij.S3_3_1, tij.S3_3_2, tij.S3_3_3, tij.S3_3_4, tij.S3_3_5, tij.S3_4_1, tij.S3_4_2, tij.S3_4_3, tij.S3_4_4, tij.S3_4_5, tij.S3_5_1, tij.S3_5_2, tij.S3_5_3, tij.S3_5_4, tij.S3_5_5, tij.S3_6, tij.Create_DTM, tij.Update_DTM ,tij.survey_form 
			FROM survey_profile p , survey_trust_in_justic tij where p.profile_id = tij.profile_id and p.status = 'complete';";
			$justicQueryData=$this->datamodel->list_data_sql_export();
			$justicData = $this->dbutil->csv_from_result($justicQueryData);
			write_file('./temp/survey_trust_in_justic.csv', $justicData);

			$this->datamodel->sql="SELECT p.profile_id, p.master_id, p.profile_code, p.A2, p.A3, p.A4, p.A4_1, p.A4_2, p.A4_3, p.A4_4, p.A4_5, p.`1_1_1`, p.`1_1_2`, p.`1_1_3`, p.`1_1_4`, p.`1_1_4_text`, p.`1_1_5`, p.`1_1_5_text`, p.`1_1_6`, p.`1_1_7`, p.`1_1_7_C1`, p.`1_1_7_C2`, p.`1_1_7_C3`, p.`1_1_7_C4`, p.`1_1_7_C5`, p.`1_1_7_C6`, p.`1_1_7_C7`, p.`1_1_7_C8`, p.`1_1_7_C9`, p.`1_1_7_C9_text`, p.`1_1_7_1`, p.`1_2`, p.`1_2_text`, p.`1_3`, p.`1_3_text`, ssf.S2_2_1_1, ssf.S2_2_1_2, ssf.S2_2_1_3, ssf.S2_2_1_4, ssf.S2_2_1_5, ssf.S2_2_1_6, ssf.S2_2_1_7, ssf.S2_2_1_8, ssf.S2_2_1_9, ssf.S2_2_1_10, ssf.S2_2_1_11, ssf.S2_2_1_12, ssf.S2_2_1_13, ssf.S2_2_2, ssf.Create_DTM, ssf.Update_DTM
			FROM survey_profile p , survey_satisfaction ssf where p.profile_id = ssf.profile_id and p.status = 'complete';";
			$satisfactionQueryData=$this->datamodel->list_data_sql_export();
			$satisfactionData = $this->dbutil->csv_from_result($satisfactionQueryData);
			write_file('./temp/survey_satisfaction.csv', $satisfactionData);

			$this->datamodel->sql="SELECT *
			FROM p_user ;";
			$descriptionQueryData=$this->datamodel->list_data_sql_export();
			$descriptionData = $this->dbutil->csv_from_result($descriptionQueryData);
			write_file('./temp/users.csv', $descriptionData);

			// Zip the CSV files
			$zip_file_path = './temp/csv_All.zip';
			$this->zip->add_data('survey_profile.csv', $profileData);
			$this->zip->add_data('survey_victims.csv', $victimsData);
			$this->zip->add_data('survey_victims_crimes.csv', $crimesData);
			$this->zip->add_data('survey_knowledge_laws.csv', $lawsData);
			$this->zip->add_data('survey_panic_in_crimes.csv', $panicData);
			$this->zip->add_data('survey_trust_for_security.csv', $securityData);
			$this->zip->add_data('survey_sdgs.csv', $sdgsData);
			$this->zip->add_data('survey_trust_in_justic.csv', $justicData);
			$this->zip->add_data('survey_satisfaction.csv', $satisfactionData);
			$this->zip->add_data('users.csv', $descriptionData);
			$this->zip->archive($zip_file_path);

			// Send the zip file as response
			$zip_file_data = file_get_contents($zip_file_path);
			force_download('csv_All.zip', $zip_file_data);

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

	function chkHave($profile_id,$table_name){				
		$user_name=$this->isLogin();
		$count = 0;
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->table_name=$table_name;
			$this->datamodel->condition='where profile_id='.$profile_id; 
			$count=$this->datamodel->list_data_count();
		}
		return $count;
	}

	function chkHaveMaster($profile_id,$master_id,$table_name){				
		$user_name=$this->isLogin();
		$count = 0;
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->table_name=$table_name;
			if($master_id == 'IS NULL'){
				$this->datamodel->condition='where profile_id='.$profile_id.' and master_id IS NULL'; 
			}else{
				$this->datamodel->condition='where profile_id='.$profile_id.' and master_id ='.$master_id; 
			}
			$count=$this->datamodel->list_data_count();
		}
		return $count;
	}

	function queryProviceId($province){				
		$user_name=$this->isLogin();
		$codeId = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select code from provinces where name_th= '".$province."'";   
			$data=$this->datamodel->first_row_data_sql();
			$codeId = $data->code;
		}
		return $codeId;
	}

	function chkProfileCodeFirst($profile_id){				
		$user_name=$this->isLogin();
		$profileCode = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select profile_code from survey_profile where profile_id = ".$profile_id;   
			$data=$this->datamodel->first_row_data_sql();
			if($data != null){
				$profileCode = $data->profile_code;
			}
			
		}
		return $profileCode;
	}

	function chkPCNotInsert($profile_id,$master_id,$table){				
		$user_name=$this->isLogin();
		$profileCode = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select profile_code from survey_profile where profile_id = ".$master_id;   
			$data=$this->datamodel->first_row_data_sql();
			$profileCodeMaster = $data->profile_code;

			$this->datamodel->sql=" select profile_code from ".$table." where profile_id = ".$profile_id;   
			$data=$this->datamodel->first_row_data_sql();
			if($data == null){
				$profileCodeMember = '';
			}else{
				$profileCodeMember = $data->profile_code;
			}
			
			
			if($profileCodeMaster != '' && ($profileCodeMember == '' || $profileCodeMember == NULL)){
				return substr($profileCodeMaster,0,10);
			}
		}
		return $profileCode;
	}

	public function queryProfileIdNext(){				
		$user_name=$this->isLogin();
		$profileId = '';
		if($user_name != false){
			$this->load->model("datamodel");
			$this->datamodel->sql=" select `AUTO_INCREMENT` from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'siamjobit_tjsurvey' AND TABLE_NAME = 'survey_profile'; ";   
			$u_now_id=$this->datamodel->first_row_data_sql();
			$profileId=$u_now_id->AUTO_INCREMENT;
		}
		echo $profileId;
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
    
}
