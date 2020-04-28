<?php 

class Event_model extends CI_Model{
	public function insert($data){
		$this->db->insert('event',$data);
		return true;
	}
	public function get_events($order_by=null,$sort='DESC',$limit=null,$offset=0){
		$this->db->select('*');
		$this->db->from('event');
		 if($limit != null)
        {
            $this->db->limit($limit, $offset);
        }
        if($order_by != null)
        {
            $this->db->order_by($order_by, $sort);
        }
        $query = $this->db->get();
        return $query->result();
	}
	public function get_event(){
		$this->db->select('*');
		$this->db->from('event');
		$query = $this->db->get();
        return $query->result();
	}
	public function get_event_by_id($id){
		return $this->db->get_where('event',['id'=>$id])->row();
	}
	public function unpublish_by_id($id){
		 $data = array(
            'is_publish' => 0
        );

        $this->db->where('id', $id);
        $this->db->update('event', $data);
		return true;
	}
	public function publish_by_id($id){
		 $data = array(
            'is_publish' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('event', $data);
		return true;
	}
	public function update($data,$id){
		 $this->db->where('id', $id);
        $this->db->update('event', $data);
        return true;
	}
	public function delete($id){
		 $this->db->where('id', $id);
        $this->db->delete('event');
        return true;
	}
}