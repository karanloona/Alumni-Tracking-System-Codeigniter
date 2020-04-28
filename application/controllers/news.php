<?php

class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('event_show_model','secure_show_event');
		$this->load->model('News_model','secure_news');
	}
	public function index(){
		//$data['event']=$this->secure_show_event->get_event();
		$data['news']=$this->secure_news->get_news('ID','DESC');
		$this->load->view('news',$data);
	}
	public function view($id){
		$data['news']=$this->secure_news->get_news_by_id($id);
		$this->load->view('views',$data);
	}
}