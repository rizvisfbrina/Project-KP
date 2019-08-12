<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chat_model extends CI_Model {  
  	public function getAll($where="")
	{
		if($where) $this->db->where($where);
		$this->db->order_by("created_at","ASC");
		return $this->db->get("chat_table");
	}
	
	public function getInsert($data){
		return $this->db->set($data)->insert("chat_table");
	}
	
	public function getLastId($where){
		return $this->db->where($where)->order_by("id_chat","DESC")->limit(1)->get("chat_table")->row_array();
	}
 
 
}
?>