<?php


class Carrer extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stu_login')){
			redirect(base_url());
		}
		$this->load->model('carrer_model','secure_carrer');
	}
	public function index(){
		$data['main_content']="login/admin/carrer/index";
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function add(){
		$data['main_content']="login/admin/carrer/add";
		$this->load->view('login/admin/layouts/main',$data);
	}
}