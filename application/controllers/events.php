<?php

class Events extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('event_show_model','secure_show_event');
	}
	public function index(){
		$data['event']=$this->secure_show_event->get_event();
		$this->load->view('event',$data);
	}
	public function view($id){
		$data['event']=$this->secure_show_event->get_event_by_id($id);
		$this->load->view('view',$data);
	}
}