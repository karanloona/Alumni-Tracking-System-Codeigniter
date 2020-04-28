<?php

class Student_model extends CI_Model{
	public function get_students(){
		$this->db->select('*');
		$this->db->from('student');
		$query = $this->db->get();
        return $query->result();
	}
	public function get_student_by_id($id){
		return $this->db->get_where('student',['id'=>$id])->row();
	}
	public function update($data,$id){
		 $this->db->where('id', $id);
        $this->db->update('student', $data);
        return true;
	}
	public function delete($id){
		 $this->db->where('id', $id);
        $this->db->delete('student');
        return true;
	}
	public function verify_by_id($id){
		 $data = array(
            'verify' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('student', $data);
		return true;
	}
	public function unverify_by_id($id){
		 $data = array(
            'verify' => 0
        );

        $this->db->where('id', $id);
        $this->db->update('student', $data);
		return true;
	}
}

?>