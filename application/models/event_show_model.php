<?php



class Event_show_model extends CI_Model{
	public function get_event_by_id($id){
		return $this->db->get_where('event',['id'=>$id])->row();
	}
	public function get_event(){
		$this->db->select('*');
		$this->db->from('event');
		$query = $this->db->get();
        return $query->result();
	}
}


?>