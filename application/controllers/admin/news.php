<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_admin')){
			redirect(base_url());
		}
		$this->load->model('News_model','secure_news');
	}
	public function index(){
		$data['news']=$this->secure_news->get_news('id','DESC');
		$data['main_content']="login/admin/news/index";
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function add(){
		$data['main_content']="login/admin/news/add";
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function add_news(){
		$data=['title'=>$this->input->post('title'),'body'=>$this->input->post('body')];
		if($this->secure_news->insert($data)){
			$this->session->set_flashdata('news_add','News Added Successfully');
			echo json_encode(base_url('admin/news'));
		}
	}
	public function update_news($id){
		$data=['title'=>$this->input->post('title'),'body'=>$this->input->post('body')];
		if($this->secure_news->update($data,$id)){
			$this->session->set_flashdata('news_update','News Updated Successfully');
			echo json_encode(base_url('admin/news'));
		}
	}	
	public function edit($id){
		$data['news']=$this->secure_news->get_news_by_id($id);
		$data['main_content']='login/admin/news/edit';
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function publish($id){
		if($this->secure_news->publish_by_id($id)){
			$this->session->set_flashdata("news_publish","News Published Successfully");
			redirect('admin/news');
		}
	}
	public function unpublish($id){
			if($this->secure_news->unpublish_by_id($id)){
			$this->session->set_flashdata("unpublish_news","News Un Published Successfully");
			redirect('admin/news');
		}
	}
	public function delete($id){
		if($this->secure_news->delete($id)){
			$this->session->set_flashdata("delete_news","News Deleted Successfully");
			redirect('admin/news');
		}
	}
}