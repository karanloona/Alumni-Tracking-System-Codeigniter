<?php

class Search_model extends CI_Model{
	public function get_search_by_name($data){
		$this->db->select('*');
		$this->db->from('student');
		$this->db->like('first_name',$data);
		$this->db->or_like('uid',$data);
		$this->db->or_like('from_date',$data);
		$this->db->or_like('stream',$data);
		 $query = $this->db->get();
        return $query->result();
	}
}

?>