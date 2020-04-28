<?php

class Profile extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stu_login')){
			redirect(base_url());
		}
		$this->load->model('profile_model','secure_profile');
	}
	public function index(){
		$data['student']=$this->secure_profile->get_student_by_id($this->session->userdata('stu_id'));
		$data['main_content']="login/student/profile/index";
		$this->load->view('login/student/layouts/main',$data);
	}
	public function update($id){
		$data=['first_name'=>$this->input->post('first_name'),'last_name'=>$this->input->post('last_name'),'mobile'=>$this->input->post('mobile'),'email'=>$this->input->post('email'),'uid'=>$this->input->post('uid'),'degree'=>$this->input->post('degree'),'stream'=>$this->input->post('stream'),'from_date'=>$this->input->post('from'),'to_date'=>$this->input->post('to'),'current'=>$this->input->post('job'),'job'=>$this->input->post('current'),'verify'=>$this->input->post('verify')];
		if($this->secure_profile->update($data,$id)){
			$this->session->set_flashdata("update_stu","Updated Successfully");
			echo json_encode(base_url('student/profile'));
		}
	}
}

?>