<?php
class dashboard_model extends CI_Model{
	public function get_student_by_id($id){
		return $this->db->get_where('student',['id'=>$id])->row();
	}
}