<?php

class News_model extends CI_Model{
	public function insert($data){
		$this->db->insert('news',$data);
		return true;
	}
	public function get_news($order_by=null,$sort='DESC',$limit=null,$offset=0){
		$this->db->select('*');
		$this->db->from('news');
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
	// public function get_news(){
		// $this->db->select('*');
		// $this->db->from('news');
		// $query = $this->db->get();
        // return $query->result();
	// }
	public function get_news_by_id($id){
		return $this->db->get_where('news',['id'=>$id])->row();
	}
	public function unpublish_by_id($id){
		 $data = array(
            'is_publish' => 0
        );

        $this->db->where('id', $id);
        $this->db->update('news', $data);
		return true;
	}
	public function publish_by_id($id){
		 $data = array(
            'is_publish' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('news', $data);
		return true;
	}
	public function update($data,$id){
		 $this->db->where('id', $id);
        $this->db->update('news', $data);
        return true;
	}
	public function delete($id){
		 $this->db->where('id', $id);
        $this->db->delete('news');
        return true;
	}
}


?>