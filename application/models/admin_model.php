<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
	
	//start image manipulation
	var $gallery_path;
	var $gallery_path_url;
	
	function Admin_model() {
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
	}
	//blog posts
	public function get_all_post(){
		$this->db->order_by("id", "desc");
		$results = $this->db->get('blog')->result();
		foreach ($results as &$result) {
			$data[] = $result;
		}
		
		return $data;
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
public function add_post($data){
		$this->db->insert('blog',$data);
		return;
 }
public function update_post(){
		$this->db->where('id',$this->uri->segment(3));
		$query =$this->db->get('blog');
		return $query->result();
 }
 public function update_record($data){
		$this->db->update('blog', $data, array('id' => $this->uri->segment(3)));
 }
public function delete_row(){
	$this->db->where('id',$this->uri->segment(3));
	$this->db->delete('blog');
	}
	
public function get_images_blog() {
	$files = scandir($this->gallery_path.'/blog');
		$files = array_diff($files, array('.', '..', 'images/blog'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url.'/blog/' . $file,
				'thumb_url' => $this->gallery_path_url.'/blog/' . $file,
			     'file' => $file
			);
		}
		
		return $images;
	}
	//start image manipulation
	function do_upload() {
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path.'general',
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/general/thumbs',
			'maintain_ration' => true,
			'width' => 150,
			'height' => 100
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
	}
	function get_images() {
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'images'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . $file,
			     'file' => $file
			);
		}
		
		return $images;
	}
	public function add_project($data){
		$this->db->insert('projects',$data);
		return;
 }
 	function insert_images() {
		
		$title=$this->db->get('projects');
		 foreach($title->result() as $tit){
			 $ttle= $tit;
			  $ttle->title;
		 }
		if($this->input->post('title')== $ttle->title){
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' =>  $file
			);
		}	
		return $images;
		}
	}
	//start project manipulation
		public function get_all_projects(){
		$results = $this->db->get('projects')->result();
		
		foreach ($results as &$result) {
			
			$data[] = $result;
		}
		
		return $data;
 }
public function update_projects(){
		$this->db->where('id',$this->uri->segment(3));
		$query =$this->db->get('projects');
		return $query->result();
 }
public function updatedProject($data){
		$this->db->update('projects', $data, array('id' => $this->uri->segment(3)));
 } 

 public function delete_project(){
	$this->db->where('id',$this->uri->segment(3));
	$this->db->delete('projects');
	}
	//start shop manipulation
		public function get_all_shops(){
			$this->db->order_by('id','desc');
		$results = $this->db->get('products')->result();
		foreach ($results as &$result) {
			$data[] = $result;
		}
		
		return $data;
 }
 public function add_item($data){
		$this->db->insert('products',$data);
		return;
 }
 public function select_shop(){
		$this->db->where('id',$this->uri->segment(3));
		$query =$this->db->get('products');
		return $query->result();
 }
 
 public function show_product_images(){
	 	$files = scandir($this->gallery_path.'/shop');
		$files = array_diff($files, array('.', '..', 'images/shop'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url.'/shop/' . $file,
				'thumb_url' => $this->gallery_path_url.'/shop/' . $file,
			     'file' => $file
			);
		}
		
		return $images;
 }
 public function updatedShop($data){
		$this->db->update('products', $data, array('id' => $this->uri->segment(3)));
 }
  public function delete_shop(){
	$this->db->where('id',$this->uri->segment(3));
	$this->db->delete('products');
	}
}
?>