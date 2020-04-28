<?php
class Login_model extends CI_Model{
	public function check_email($email){
		$result=$this->db->get_where('student',['email'=>$email])->row();
		if(empty($result)){
			return true;
		}
		else{
			return false;
		}
	}
	public function insert($data){
		$this->db->insert('student',$data);
		return true;
	}
	public function admin_test($email,$password){
		$result=$this->db->get_where('admin',['email'=>$email])->row();
		if(!empty($result)){
			if(password_verify($password,$result->password)){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
	public function stu_test($email,$password){
		$result=$this->db->get_where('student',['email'=>$email])->row();
		if(!empty($result)){
			if(password_verify($password,$result->password)){
				if($result->verify==1){
					$this->session->set_userdata('stu_id',$result->id);
					return "success";
				}
				else{
					return "you are not verified";
				}
			}
			else{
				return "Wrong Information";
			}
		}
		else{
			return "Wrong Information";
		}
	}
}