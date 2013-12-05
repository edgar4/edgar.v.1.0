<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
		$this->image_path = realpath(APPPATH . '../images');
		$this->image_path_url = base_url().'images/';
	}
	public function index()
	{
		$admin_temp['contents'] ='dashboard';
		$this->load->view('admin/admin_template',$admin_temp);
	}
	//blog methods
	public function newPost(){
		
		$admin_temp['contents'] ='new';
		$this->load->view('admin/admin_template',$admin_temp);
	}
	public function addPost(){
			$this->load->library('form_validation');
		    $this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		    $this->form_validation->set_rules('category','Category','trim|required|min_length[3]');
		    //$this->form_validation->set_rules('userfile','Thumbnail','trim|required|');
	        $this->form_validation->set_rules('date','Date','trim|required');
	  	    $this->form_validation->set_rules('author','Author','trim|required');   
			 $this->form_validation->set_rules('post','Post','trim|required');
		if($this->form_validation->run()==false){
				$admin_temp['contents'] ='new';
		        $this->load->view('admin/admin_template',$admin_temp);
		}
		else{
		$config['upload_path'] = $this->image_path.'/blog';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['width']  = '595';
		$config['height']  = '403';
		$config['maintain_ration'] = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			print_r( $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach($data as $dat){

			$insert_img = $dat['file_name'];
			}
		}	 
			$data = array(
			  'date' => $this->input->post('date'),
			  'author' => $this->input->post('author'),
			  'title'=> $this->input->post('title'),
			  'category' => $this->input->post('category'),
			  'public_url' => str_replace(" ", "-", $this->input->post('title')) ,
		 	  'thumbnail' =>$insert_img,
			  'image'=> $insert_img,
		 	  'post' => $this->input->post('post'),
			 
			);
			$this->admin_model->add_post($data);
			redirect('admin/edit');
		}
	}
public function edit(){
	 
	   $admin_temp['posts'] =$this->admin_model->get_all_post();
	   $admin_temp['contents'] ='choose-edit';
		$this->load->view('admin/admin_template',$admin_temp);
	
}
public function update(){
	   $admin_temp['posts'] =$this->admin_model->update_post();
	   $admin_temp['contents'] ='edit';
	    $admin_temp['images'] =$this->admin_model->get_images_blog();
		$this->load->view('admin/admin_template',$admin_temp);
}
public function updated(){
	if($query=$this->admin_model->update_post()){
		$admin_temp['posts'] = $query;
	}
	        $this->load->library('form_validation');
		    $this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		    $this->form_validation->set_rules('category','Category','trim|required|min_length[3]');
		    $this->form_validation->set_rules('image','Thumbnail','trim|required|');
	        $this->form_validation->set_rules('date','Date','trim|required');
	  	    $this->form_validation->set_rules('author','Author','trim|required');   
			 $this->form_validation->set_rules('post','Post','trim|required');
		if($this->form_validation->run()==false){
				$admin_temp['contents'] ='new';
		        $this->load->view('admin/admin_template',$admin_temp);
		}
		else{	 
			$data = array(
			  'date' => $this->input->post('date'),
			  'author' => $this->input->post('author'),
			  'title'=> $this->input->post('title'),
			  'category' => $this->input->post('category'),
			  'public_url' => str_replace(" ", "-", $this->input->post('title')) ,
		 	  'thumbnail' => $this->input->post('image'),
			  'image'=> $this->input->post('image'),
		 	  'post' => $this->input->post('post'),
			 
			);
			$this->admin_model->update_record($data);
			$this->edit();
		}

}
public function delete(){
	   $admin_temp['posts'] =$this->admin_model->get_all_post();
	   $admin_temp['contents'] ='delete';
		$this->load->view('admin/admin_template',$admin_temp);
}
public function deleted(){
	$this->load->model('admin_model');
	$this->admin_model->delete_row();
	$this->delete();
}
// project methods
public function project(){
	   $admin_temp['contents'] ='sandbox-new';
		$this->load->view('admin/admin_template',$admin_temp);
}
function do_upload()
	{		
		$this->load->library('form_validation');
		    $this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		    $this->form_validation->set_rules('category','Project Url','trim|required|min_length[3]');
	        $this->form_validation->set_rules('date','Date','trim|required');
	  	    $this->form_validation->set_rules('author','Client','trim|required');   
			 $this->form_validation->set_rules('post','Post','trim|required');
			  $this->form_validation->set_rules('contribution','conrtibution','trim|required');
		if($this->form_validation->run()==false){
				$admin_temp['contents'] ='sandbox-new';
		        $this->load->view('admin/admin_template',$admin_temp);
		}
			else{	
		$config['upload_path'] = $this->image_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['width']  = '732';
		$config['height']  = '562';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			print_r( $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach($data as $dat){

			$insert_img = $dat['file_name'];
			}
		}	 
			$data_insert = array(
			  'title' => $this->input->post('title'),
			  'overview' => $this->input->post('post'),
			  'contribution'=> $this->input->post('contribution'),
			  'year' => $this->input->post('date'),
			  'client' =>  $this->input->post('author') ,
		 	  'url' => $this->input->post('category'),
			  'image'=>$insert_img,
			);
		$this->load->model('admin_model');
		 $this->admin_model->add_project($data_insert);
		 $admin_temp['projects'] =$this->admin_model->get_all_projects();
		$admin_temp['contents'] ='choose-project';
		$this->load->view('admin/admin_template',$admin_temp);
			}
	}
public function chooseProject(){
		$admin_temp['projects'] =$this->admin_model->get_all_projects();
	      $admin_temp['contents'] ='choose-project';
		  $this->load->view('admin/admin_template',$admin_temp);
}
public function showEdit(){
	$this->load->model('admin_model');
	   $admin_temp['projects'] =$this->admin_model->update_projects();
	   $admin_temp['contents'] ='sandbox-edit';
	   $admin_temp['images'] =$this->admin_model->get_images();
	   
		  $this->load->view('admin/admin_template',$admin_temp);
}
public function editProject(){
	if($query=$this->admin_model->update_post()){
		$admin_temp['projects'] = $query;
	}
	   		$this->load->library('form_validation');
		    $this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		    $this->form_validation->set_rules('category','Project Url','trim|required|min_length[3]');
	        $this->form_validation->set_rules('date','Date','trim|required');
	  	    $this->form_validation->set_rules('author','Client','trim|required');   
			 $this->form_validation->set_rules('post','Post','trim|required');
			  $this->form_validation->set_rules('contribution','conrtibution','trim|required');
	  	   
		if($this->form_validation->run()==false){
				$admin_temp['contents'] ='choose-project';
		        $this->load->view('admin/admin_template',$admin_temp);
		}
			else{	 
			$data_insert = array(
			  'title' => $this->input->post('title'),
			  'overview' => $this->input->post('post'),
			  'contribution'=> $this->input->post('contribution'),
			  'year' => $this->input->post('date'),
			  'client' =>  $this->input->post('author') ,
		 	  'url' => $this->input->post('category'),
			  'image'=>$this->input->post('image'),
			);
		 $this->admin_model->updatedProject($data_insert);
		$this->chooseProject();
			}   
}
public function deleteProject(){
	   $admin_temp['projects'] =$this->admin_model->get_all_projects();
	   $admin_temp['contents'] ='choose-delete';
		$this->load->view('admin/admin_template',$admin_temp);
}
public function deletedProject(){
	$this->load->model('admin_model');
	$this->admin_model->delete_project();
	$this->deleteProject();
}
// shop methods	

public function shopNew(){
	     $admin_temp['contents'] ='shop-new';
		$this->load->view('admin/admin_template',$admin_temp);
}
function shopAdd()
	{		
		$this->load->library('form_validation');
		    $this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		    $this->form_validation->set_rules('category','Price','trim|required|min_length[3]');
	        $this->form_validation->set_rules('date','Date','trim|required');
	  	    $this->form_validation->set_rules('author','Client','trim|required');   
			 $this->form_validation->set_rules('post','Post','trim|required');
			 //$this->form_validation->set_rules('userfile','Image','trim|required');
		if($this->form_validation->run()==false){
				$admin_temp['contents'] ='shop-new';
		        $this->load->view('admin/admin_template',$admin_temp);
		}
			else{	
		$config['upload_path'] = $this->image_path.'/shop';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['width']  = '295';
		$config['height']  = '200';
		$config['maintain_ration'] = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			print_r( $error);
		}
		else
		{
		$this->load->library('image_lib', $config); 
        $this->image_lib->resize();
			$data = array('upload_data' => $this->upload->data());
			foreach($data as $dat){

			$insert_img = $dat['file_name'];
			}
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		}	 
			$data_insert = array(
			 'name' => $this->input->post('title'),
			  'price' => $this->input->post('category'),
			   'image'=>$insert_img,
			  'option_name' => $this->input->post('date'),
			  'option_value' =>  $this->input->post('author') ,
			  'description' => $this->input->post('post'),
			);
		 $this->admin_model->add_item($data_insert);
	     $this->shop();
			}
	}
public function shop(){
	   $admin_temp['products'] =$this->admin_model->get_all_shops();
	   $admin_temp['contents'] ='shop-edit';
		$this->load->view('admin/admin_template',$admin_temp);
}
public function selectedProduct(){
	    $admin_temp['images']= $this->admin_model->show_product_images();
	    $query= $this->admin_model->select_shop();
		$admin_temp['products'] = $query;
		$admin_temp['contents'] ='shop-update';
		 $this->load->view('admin/admin_template',$admin_temp);
}
public function shopEdit(){
	if($query=$this->admin_model->select_shop()){
		$admin_temp['products'] = $query;
		
	}
	   		$this->load->library('form_validation');
		    $this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		    $this->form_validation->set_rules('category','Project Url','trim|required|min_length[3]');
	        $this->form_validation->set_rules('date','Date','trim|required');
	  	    $this->form_validation->set_rules('author','Client','trim|required');   
			 $this->form_validation->set_rules('post','Post','trim|required');
			  $this->form_validation->set_rules('image','image','trim');
		if($this->form_validation->run()==false){
				$admin_temp['contents'] ='shop-update';
		        $this->load->view('admin/admin_template',$admin_temp);
		}
			else{	 
			$data_insert = array(
			  'name' => $this->input->post('title'),
			  'price' => $this->input->post('category'),
			   'image'=>$this->input->post('image'),
			  'option_name' => $this->input->post('date'),
			  'option_value' =>  $this->input->post('author') ,
			  'description' => $this->input->post('post'),
			);
		 $this->admin_model->updatedShop($data_insert);
		$this->shop();
			}   
}

public function shopDelete(){
	$this->admin_model->delete_shop();
	$this->shop();
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */