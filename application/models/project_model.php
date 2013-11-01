<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class project_model extends CI_Model{
public function validate(){
	 $this->db->where('name',$this->input->post('name'));
	 $this->db->where('lastname',$this->input->post('last'));
	 $this->db->where('email',$this->input->post('email'));
	 $query = $this->db->get('projectNew');
	  if($query->num_rows()==1){ 
		  return true;
	  }	
 }
public function get_records($name,$lastname,$email){
		$query = $this->db->get_where('projectnew', array('name' => $name, 'lastName' =>$lastname, 'email'=> $email        ) );
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
 }
public function add_record($data){
		$this->db->insert('projectNew',$data);
		return;
 }
public function update_record($data){
		$this->db->where('id',$this->input->get('pesapal_merchant_reference'));
		$this->db->update('projectNew',$data);
 }
public function delete_row(){
	$this->db->where('id',$this->uri->segment(3));
	$this->db->delete($data);
	}
}
?>