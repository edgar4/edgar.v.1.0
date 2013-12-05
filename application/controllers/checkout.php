<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	public function index()
	{
		//$data_temp['content'] = "deal_view";
		 //   $this->load->view('template_main',$data_temp);
		
	}
public	function is_logged_in(){
	 $is_logged_in = $this->session->userdata('is_logged_in');
	 if(!isset($is_logged_in)|| $is_logged_in != true){
		 
	redirect('edgar/descProject');
	 }else{
		 return true;
	 }
	}
public function sendCash(){
		    $name= $this->session->userdata('name');
			$lastname= $this->session->userdata('lastname');
			$email = $this->session->userdata('email');
	         $this->load->model('project_model');
	        $data = $this->project_model->get_records($name,$lastname,$email     );
	//$name2 = array($name,$email,$lastname);
	      $data_temp['records'] = $data;
	      $data_temp['content'] = "deal_view";
          $this->load->view('template_main',$data_temp);
		  
		  
}
function pesa(){
	if ($this->is_logged_in())
        {
			 $name= $this->session->userdata('name');
			$lastname= $this->session->userdata('lastname');
			$email = $this->session->userdata('email');
	         $this->load->model('project_model');
	        $data = $this->project_model->get_records($name,$lastname,$email     );
	//$name2 = array($name,$email,$lastname);
	      $data_temp['records'] = $data;
           $data_temp['content'] = "pesa_view";
          $this->load->view('template_main',$data_temp);
        }
}
function update(){
	
		if ($this->is_logged_in())
        {
			 $name= $this->session->userdata('name');
			$lastname= $this->session->userdata('lastname');
			$email = $this->session->userdata('email');
	         $this->load->model('project_model');
	        $data = $this->project_model->get_records($name,$lastname,$email     );
	// update data base
	 $tracker = $this->input->get('pesapal_transaction_tracking_id');
	 $id = $this->input->get('pesapal_merchant_reference');
	 $update = array(
	 'tracking_id'=> $tracker,
	 );
	 
	$this->load->model('project_model');
	$this->project_model->update_record($update);
	
        }
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */