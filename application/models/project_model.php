<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class project_model extends CI_Model{
	
	public function get_records(){
		
		$query = $this->db->get('newproject');
		return $query->result();
	}
	
	
	public function add_record($data){
		$this->db->insert('newproject',$data);
		
		return;
	}
	
	public function update_record(){
	}
	
}
?>