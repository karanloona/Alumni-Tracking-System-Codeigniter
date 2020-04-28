<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_admin')){
			redirect(base_url());
		}
		$this->load->model('main_model','secure_main');
	}
	public function index(){
		$data['event']=$this->secure_main->get_events();
		$data['news']=$this->secure_main->get_news();
		$data['main_content']="login/admin/dashboard/index";
		$this->load->view('login/admin/layouts/main',$data);
	}
	
}