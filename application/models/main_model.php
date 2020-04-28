<?php


class main_model extends CI_Model{
	public function get_news(){
		$this->db->select('*');
		$this->db->from('news');
		$query = $this->db->get();
        return $query->result();
	}
	public function get_events(){
		$this->db->select('*');
		$this->db->from('event');
		$query = $this->db->get();
        return $query->result();
	}


}



?>