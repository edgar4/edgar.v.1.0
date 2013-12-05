
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model{
 public function __construct() {
        parent::__construct();
    }
 
    public function record_count() {
        return $this->db->count_all("blog");
    }
 
    public function fetch_countries($limit, $start) {
		$this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        $query = $this->db->get("blog");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    function get_blog(){
	  $query=$this->db->get_where('blog',array('public_url' => $this->uri->segment(3)));
	 /*$this->db->get('meta');*/
	 	if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
	 
 }
}