<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edgar extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
	}

	public function index()
	{
		
		
		$data_temp['content'] = "home_view";
		$this->load->view('template_main',$data_temp);
		
		
	}//end

	public function notSofast(){
		
		$data_temp['content'] = "notsofast";
		$this->load->view('template_main',$data_temp);
	}//end

	public function contact()
	{
		$data_temp['content'] = "contact_view";
		$this->load->view('template_main',$data_temp);
	}//end
	
	public function sendEmail(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name','trim|required|min_length[3]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	  $this->form_validation->set_rules('city','City','trim|required');
	  	$this->form_validation->set_rules('phone','Phone','trim|required|numeric');
			$this->form_validation->set_rules('message','Message','trim|required');
		
		
		
		if($this->form_validation->run()==false){
			
			$data_temp['content'] = "contact_view";
		    $this->load->view('template_main',$data_temp);
			
			
		}
		
		else{
		
	
			 $first_sign = array(
			 
			  $name = $this->input->post('name'),
			 $email= $this->input->post('email'),
			 $city = $this->input->post('city'),
			 $phone = $this->input->post('phone'),
			 $message = $this->input->post('message'),
			 
			   
			 );
			 
			 return $first_sign;
		}
		
		
	}

	public function newProject()
	{
		$data_temp['content'] = "project-new";
		$this->load->view('template_main',$data_temp);
		

	
	}//end
	
	public function descProject(){
		
	
			$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	  $this->form_validation->set_rules('city','City','trim|required');
	  	$this->form_validation->set_rules('phone','Phone','trim|required|numeric');
			$this->form_validation->set_rules('message','Message','trim|required');
		
		
		
		if($this->form_validation->run()==false){
			
			$data_temp['content'] = "project-new";
		    $this->load->view('template_main',$data_temp);
			
			
		}
		
		else{	 $first_sign = array(
			 
			  $name = $this->input->post('name'),
			 $email= $this->input->post('email'),
			 $city = $this->input->post('city'),
			 $phone = $this->input->post('phone'),
			 $message = $this->input->post('message'),
			 
			   
			 );
			 
			
			
			
			$data_temp['content'] = "descProject1";
		    $this->load->view('template_main',$data_temp);
			
		}
	   
	}//end
	
	public function descProject2(){
		
		
			$this->load->library('form_validation');
			
		$this->form_validation->set_rules('aim','Your aim','trim|required|min_length[3]');
		$this->form_validation->set_rules('least','least number of pages','trim|required|numeric');
	  $this->form_validation->set_rules('target','Target Audience','trim|required');
	  $this->form_validation->set_rules('name','Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	  $this->form_validation->set_rules('city','City','trim|required');
	  	$this->form_validation->set_rules('phone','Phone','trim|required|numeric');
			$this->form_validation->set_rules('message','Message','trim|required');
	  //	$this->form_validation->set_rules('business','Business','trim|required|');
		//	$this->form_validation->set_rules('platform','Platform');
		
		
		
		if($this->form_validation->run()==false){
			
			$data_temp['content'] = "descProject1";
		   $this->load->view('template_main',$data_temp);
		   
			
		
		}
		
		else{
			$data_temp['content'] = "descProject2";
		    $this->load->view('template_main',$data_temp);
			
	
			
		}
	
	}//end
	
	public function descProject3(){
		
			$this->load->library('form_validation');
		
		$this->form_validation->set_rules('message-long','Your message','trim|required|min_length[3]');
		$this->form_validation->set_rules('aim','Your aim','trim|required|min_length[3]');
		$this->form_validation->set_rules('least','least number of pages','trim|required|numeric');
	  $this->form_validation->set_rules('target','Target Audience','trim|required');
	  $this->form_validation->set_rules('name','Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	  $this->form_validation->set_rules('city','City','trim|required');
	  	$this->form_validation->set_rules('phone','Phone','trim|required|numeric');
		$this->form_validation->set_rules('message','Message','trim|required');
		$this->form_validation->set_rules('newPlatform','','trim|');
		$this->form_validation->set_rules('newPlatform','','trim|');
		
		
		
		
		
		if($this->form_validation->run()==false){
			
			$data_temp['content'] = "descProject2";
		   $this->load->view('template_main',$data_temp);
			
		
		}
		
		else{
			$data= array(
			"name"=>$this->input->post('name'),
			"email"=>$this->input->post('email'),
			"phone"=>$this->input->post('phone'),
			"city"=>$this->input->post('city'),
			"projectDesc"=>$this->input->post('message'),
			"aim"=>$this->input->post('aim'),
			"pages"=>$this->input->post('least'),
			"audience"=>$this->input->post('target'),
			"bussinessType"=>$this->input->post('type'),
			"platform"=>$this->input->post('platform'),
			"otherService"=>$this->input->post('interface'),
			"longDesc"=>$this->input->post('message-long'),
			
			
			
			
			
			
			);
			
			$this->project_model->add_record($data);
			
			
			$data_temp['content'] = "finishProject";
		    $this->load->view('template_main',$data_temp);
			
			
			
	
			
		}
	}//end
	
	public function outEmail(){
		
		$config = array(
		 'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.gmail.com',
		   'smtp_port' => '465',
		    'smtp_user' => '    fonexpressfeedback@gmail.com',
			 'smtp_pass' => 'fonex20q'
		
		
		);
		
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from("fonexpressfeedback@gmail.com");
		$this->email->to("edgarchris99@yahoo.com");
		$this->email->subject('email test');
		$this->email->message('ok carry on it works');
		
		if($this->email->send()){
			
			echo "email worls";
		}
		else{
			//show_error($this->print_debugger());
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */