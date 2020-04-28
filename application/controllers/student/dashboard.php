<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stu_login')){
			redirect(base_url());
		}
		$this->load->model('dashboard_model','secure_dashboard');
		$this->load->model('main_model','secure_main');
	}
	public function index(){
		$this->load->helper('text');
		$data['stu_name']=$this->secure_dashboard->get_student_by_id($this->session->userdata('stu_id'));
		$data['event']=$this->secure_main->get_events();
		$data['news']=$this->secure_main->get_news();
		$data['main_content']="login/student/dashboard/index";
		$this->load->view('login/student/layouts/main',$data);
	}
}