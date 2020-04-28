<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('main_model','secure_main');
	}
	public function index()
	{
		$this->load->helper('text');
		$this->session->unset_userdata('register_success');
		$this->session->unset_userdata('already_register');
		$this->session->unset_userdata('not_verify');
		$data['news']=$this->secure_main->get_news();
		$data['event']=$this->secure_main->get_events();
		$this->load->view('main',$data);
	}
}
