<?php
class Products_model extends CI_model{

function get_all($limit, $start) {
      $this->db->order_by("id", "desc");
		 $this->db->limit($limit, $start);
		
		$results = $this->db->get('products')->result();
		
		foreach ($results as &$result) {
			
			if ($result->option_value) {
				$result->option_value = explode(',',$result->option_value);
			}
			
		}
		return $results;	
	}
function get_all_this() {

		$results = $this->db->get('products')->result();
		
		foreach ($results as &$result) {
			
			if ($result->option_value) {
				$result->option_value = explode(',',$result->option_value);
			}
			
		}
		
		return $results;
		
	}
	
function get($id) {
		
		$results = $this->db->get_where('products', array('id' => $id))->result();
		$result = $results[0];
		
		if ($result->option_value) {
			$result->option_value = explode(',',$result->option_value);
		}
		
		return $result;
	}
	public function add_record($data){
		$this->db->insert('buyers',$data);
		return;
 }
 
 public function update_record($data){
		$this->db->where('row_id',$this->input->get('pesapal_merchant_reference'));
		$this->db->update('buyers',$data);
 }
  public function __construct() {
        parent::__construct();
    }
 
    public function record_count() {
        return $this->db->count_all("products");
    }
 
    public function fetch_countries($limit, $start) {
		$this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        $query = $this->db->get("products");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
		
   }
}