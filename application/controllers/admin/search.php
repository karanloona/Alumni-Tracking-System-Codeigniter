<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_admin')){
			redirect(base_url());
		}
		$this->load->model('search_model','secure_search');
	}
	public function index(){
		$data['main_content']="login/admin/search/index";
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function result(){
		$this->form_validation->set_rules('search_bar','Enter Name / Batch / UID','trim|required');
		if($this->form_validation->run() == FALSE)
        {
            $data['main_content']='login/admin/search/index';
			$this->load->view('login/admin/layouts/main',$data);
        }
		else{
			$name=$this->input->post('search_bar');
			$data['name']=$this->secure_search->get_search_by_name($name);
			$data['main_content']='login/admin/search/result';
			$this->load->view('login/admin/layouts/main',$data);
		}
		
	}
}