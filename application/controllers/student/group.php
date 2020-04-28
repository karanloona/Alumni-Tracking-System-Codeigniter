<?php

class Group extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stu_login')){
			redirect(base_url());
		}
		$this->load->model('group_model','secure_group');
	}
	public function index(){
		$data['chat']=$this->secure_group->get_chat('id','ASEC');
		$data['name']=$this->secure_group->get_student_name($this->session->userdata('stu_id'));
		$data['main_content']="login/student/group/index";
		$this->load->view('login/student/layouts/main',$data);
	}
	public function add_group(){
		$data=['message'=>$this->input->post('message'),'name'=>$this->input->post('name')];
		if($this->secure_group->insert($data)){
			echo json_encode(base_url('student/group'));
		}
		
	}
	
}