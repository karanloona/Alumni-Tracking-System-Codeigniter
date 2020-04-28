<?php
class Profile_model extends CI_Model{
	public function get_student_by_id($id){
		return $this->db->get_where('student',['id'=>$id])->row();
	}
	public function update($data,$id){
		 $this->db->where('id', $id);
        $this->db->update('student', $data);
        return true;
	}
}