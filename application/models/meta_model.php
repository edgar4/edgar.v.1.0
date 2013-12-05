<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Meta_model extends CI_model{
	
 function contact(){
	  $query=$this->db->get_where('meta',array('page' => $this->uri->segment(2)  ));
	 /*$this->db->get('meta');*/
	 	if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
	 
 }
  function blog(){
	  $query=$this->db->get_where('meta',array('page' => $this->uri->segment(1)  ));
	 /*$this->db->get('meta');*/
	 	if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
	 
 }
  function shop(){
	  $query=$this->db->get_where('meta',array('page' => $this->uri->segment(1)  ));
	 /*$this->db->get('meta');*/
	 	if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
	 
 }
  function project(){
	  $query=$this->db->get_where('meta',array('page' => $this->uri->segment(1)  ));
	 /*$this->db->get('meta');*/
	 	if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
	 
 }
  function home(){
	  $query=$this->db->get_where('meta',array('page' => $this->uri->segment(2)  ));
	 /*$this->db->get('meta');*/
	 	if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
	 
 }
 

 

}