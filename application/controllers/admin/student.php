<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_admin')){
			redirect(base_url());
		}
		$this->load->model('student_model','secure_student');
	}
	public function index(){
		$data['student']=$this->secure_student->get_students();
		$data['main_content']="login/admin/student/index";
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function edit($id){
		$data['student']=$this->secure_student->get_student_by_id($id);
		$data['main_content']="login/admin/student/edit";
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function update($id){
		$data=['first_name'=>$this->input->post('first_name'),'last_name'=>$this->input->post('last_name'),'mobile'=>$this->input->post('mobile'),'email'=>$this->input->post('email'),'uid'=>$this->input->post('uid'),'degree'=>$this->input->post('degree'),'stream'=>$this->input->post('stream'),'from_date'=>$this->input->post('from'),'to_date'=>$this->input->post('to'),'current'=>$this->input->post('job'),'job'=>$this->input->post('current'),'verify'=>$this->input->post('verify')];
		if($this->secure_student->update($data,$id)){
			$this->session->set_flashdata("update_user","Updated Successfully");
			echo json_encode(base_url('admin/student'));
		}
	}
	public function delete($id){
		if($this->secure_student->delete($id)){
			$this->session->set_flashdata("delete_user","Deleted Successfully");
			redirect('admin/student');
		}
	}
	public function verify($id){
		if($this->secure_student->verify_by_id($id)){
			$this->session->set_flashdata("verify_user","User Verified Successfully");
			redirect('admin/student');
		}
	}
	public function unverify($id){
		if($this->secure_student->unverify_by_id($id)){
			$this->session->set_flashdata("unverify_user","User Un Verified Successfully");
			redirect('admin/student');
		}
	}
}