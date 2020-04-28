<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model','secure_login');
	}
	public function index()
	{
		$this->session->unset_userdata('register_success');
		$this->session->unset_userdata('already_register');
		$this->session->unset_userdata('not_verify');
		$this->load->view('login');
	}
	public function register_test(){
		$email=$this->input->post('email');
		$pass=password_hash($this->input->post('password'),PASSWORD_BCRYPT,array('cost'=>13));
		if($this->secure_login->check_email($email)){
			$data=['first_name'=>$this->input->post('first_name'),'last_name'=>$this->input->post('last_name'),'mobile'=>$this->input->post('mobile'),'email'=>$email,'password'=>$pass,'uid'=>$this->input->post('uid'),'degree'=>$this->input->post('degree'),'stream'=>$this->input->post('stream'),'from_date'=>$this->input->post('from'),'to_date'=>$this->input->post('to'),'current'=>$this->input->post('job'),'job'=>$this->input->post('current'),'verify'=>0];
			if($this->secure_login->insert($data)){
				$this->session->set_userdata('register_success','You are successfully registerd');
				echo json_encode("login/success");			
			}
		}
		else{
			$this->session->set_userdata('already_register','You are allready register');
			echo json_encode("login/register");
		}
	}
	public function login_test(){
		$email=$this->input->post('login_email');
		$password=$this->input->post('login_password');
		$result=$this->secure_login->stu_test($email,$password);
		if($result == "you are not verified"){
			$this->session->set_userdata('not_verify','You are Not Verify');
			echo json_encode("login/verify");
		}
		else if($result == "Wrong Information"){
			echo json_encode("Wrong Information");
		}
		else if($result == "success"){
			$this->session->set_userdata('stu_login','Welcome Student');
			echo json_encode("student/");
		}
		else{
			echo json_encode("something went wrong");
		}
	}
	public function admin_test(){
		$email=$this->input->post('admin_email');
		$password=$this->input->post('admin_password');
		if($this->secure_login->admin_test($email,$password)==true){
			$this->session->set_userdata('login_admin','Welcom admin');
			echo json_encode("admin/");
		}
		else{
			echo json_encode("Wrong Information");
		}
	}
	public function register(){
		$this->load->view('message/register');
	}
	public function success(){
		$this->load->view('message/success');
	}
	
	public function verify(){
		$this->load->view('message/verify');
	}
	public function logout(){
		$this->session->unset_userdata('login_admin','Logout Successfull');
		redirect(base_url());
	}
	public function logout_stu(){
		$this->session->unset_userdata('stu_login','Student Logout Successfull');
		$this->session->unset_userdata('stu_id','Student id Logout Successfull');
		redirect(base_url());
	}
}
