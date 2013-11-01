<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Edgar extends CI_Controller {
public function index()
	{
		$data_temp['content'] = "home_view";
		$this->load->view('template_main',$data_temp);
}//end
public function newProject(){
		$data_temp = array(
		'content'=> "project-new",
		);
		$this->load->view('template_main',$data_temp);
}//end
public function contact(){
		$data_temp = array(
		'content'=> "contact_view",
		);
		$this->load->view('template_main',$data_temp);
}//end
	
public function descProject(){
			$this->load->library('form_validation');
		    $this->form_validation->set_rules('name','Name','trim|required|min_length[3]');
		    $this->form_validation->set_rules('last','LastName','trim|required|min_length[3]');
		    $this->form_validation->set_rules('email','Email','trim|required|valid_email');
	        $this->form_validation->set_rules('city','City','trim|required');
	  	    $this->form_validation->set_rules('phone','Phone','trim|required|numeric');
			$this->form_validation->set_rules('message','Message','trim|required');
			$this->form_validation->set_rules('aim','Main Aim of project','trim|required');
	  	    $this->form_validation->set_rules('target','Target Audience','trim|required|');
			$this->form_validation->set_rules('bussinessType','Bussiness Type','trim|required');
			//$this->form_validation->set_rules('platform','platform','trim|required');
			$this->form_validation->set_rules('budget',' Budget','trim|required');
		if($this->form_validation->run()==false){
			$data_temp['content'] = "project-new";
		    $this->load->view('template_main',$data_temp);
		}
		else{	 
			$data = array(
			  'name' => $this->input->post('name'),
			  'lastName' => $this->input->post('last'),
			  'email'=> $this->input->post('email'),
			  'phone' => $this->input->post('phone'),
			  'city' => $this->input->post('city'),
		 	  'aim' => $this->input->post('aim'),
			  'target'=> $this->input->post('target'),
		 	  'projectdetail' => $this->input->post('message'),
			  'bussinesType' => $this->input->post('bussinessType'),	 
			 // 'platform' => $this->input->post('platform'),
		 	  'budget' => $this->input->post('budget'),
		 //	'message' => $this->input->post('message-long')
			);
			$this->project_model->add_record($data);
			$name= $this->input->post('name');
			$lastname= $this->input->post('last');
			$email = $this->input->post('email');
			$this->setDeposit();
		//	$data_temp['content'] = "descProject1";
		 //   $this->load->view('template_main',$data_temp);
		}
	}//end

public function setDeposit(){
	$this->load->model('project_model');
	$query =$this->project_model->validate();
	
	if($query){
		$data = array(
		  'name'=> $this->input->post('name'),
		  'lastname'=> $this->input->post('last'),
		  'email'=> $this->input->post('email'),
		  'is_logged_in' => true
		);
		
		$this->session->set_userdata($data);
		redirect('checkout/sendCash');
	}else{
		$this->index();
	}
}
 public function checkout(){
	 
	     $data_temp['content'] = "deal_view";
		    $this->load->view('template_main',$data_temp);
 }
//end
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