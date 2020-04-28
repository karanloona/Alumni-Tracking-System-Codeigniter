<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_admin')){
			redirect(base_url());
		}
		$this->load->model('event_model','secure_event');
	}
	public function index(){
		$data['event']=$this->secure_event->get_events('id','DESC');
		$data['main_content']="login/admin/event/index";
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function add(){
		$data['main_content']='login/admin/event/add';
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function add_event(){
		$data=['title'=>$this->input->post('title'),'description'=>$this->input->post('description'),'venue'=>$this->input->post('venue'),'state'=>$this->input->post('state'),'city'=>$this->input->post('city'),'day'=>$this->input->post('day'),'month'=>$this->input->post('month'),'year'=>$this->input->post('year'),'organize_name'=>$this->input->post('name'),'is_publish'=>1,'organize_contact'=>$this->input->post('mobile')];
		if($this->secure_event->insert($data)){
			$this->session->set_flashdata('event_add','Event Added Successfully');
			echo json_encode(base_url('admin/event'));
		}
	}
	public function update_event($id){
		$data=['title'=>$this->input->post('title'),'description'=>$this->input->post('description'),'venue'=>$this->input->post('venue'),'state'=>$this->input->post('state'),'city'=>$this->input->post('city'),'day'=>$this->input->post('day'),'month'=>$this->input->post('month'),'year'=>$this->input->post('year'),'organize_name'=>$this->input->post('name'),'organize_contact'=>$this->input->post('mobile')];
		if($this->secure_event->update($data,$id)){
			$this->session->set_flashdata('event_update','Event Updated Successfully');
			echo json_encode(base_url('admin/event'));
		}
	}	
	public function edit($id){
		$data['event']=$this->secure_event->get_event_by_id($id);
		$data['main_content']='login/admin/event/edit';
		$this->load->view('login/admin/layouts/main',$data);
	}
	public function publish($id){
		if($this->secure_event->publish_by_id($id)){
			$this->session->set_flashdata("publish_event","Event Published Successfully");
			redirect('admin/event');
		}
	}
	public function unpublish($id){
			if($this->secure_event->unpublish_by_id($id)){
			$this->session->set_flashdata("unpublish_event","Event Un Published Successfully");
			redirect('admin/event');
		}
	}
	public function delete($id){
		if($this->secure_event->delete($id)){
			$this->session->set_flashdata("delete_event","Event Deleted Successfully");
			redirect('admin/event');
		}
	}
}