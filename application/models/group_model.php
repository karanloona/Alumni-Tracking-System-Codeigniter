<?php 

class Group_Model extends CI_Model{
	
	public function get_chat($order_by=null,$sort='DESC',$limit=null,$offset=0){
		$this->db->select('a.*, b.first_name');
		$this->db->from('group_chat as a');
		$this->db->join('student as b','a.name=b.email','left');
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
	public function get_student_name($id){
		return $this->db->get_where('student',['id'=>$id])->row();
	}
	public function insert($data){
		$this->db->insert('group_chat',$data);
		return true;
	}
}


?>