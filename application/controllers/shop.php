<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {
	
	public function index()
	{
	$this->load->model('products_model');
	$data_temp['products'] = $this->products_model->get_all();
	$data_temp['content'] = "shop_view";
	$this->load->view('template_main',$data_temp);
	}
function add() {
		
		$this->load->model('Products_model');
		
		$product = $this->Products_model->get($this->input->post('id'));
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_value[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
	
		redirect('shop');
		
	}
	
	function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		redirect('shop');
		
	}
function checkout(){
	
		    $this->load->library('form_validation');
		    $this->form_validation->set_rules('name','Name','trim|required|min_length[3]');
		    $this->form_validation->set_rules('last','LastName','trim|required|min_length[3]');
		    $this->form_validation->set_rules('email','Email','trim|required|valid_email');
	        $this->form_validation->set_rules('city','City','trim|required');
	  	    $this->form_validation->set_rules('phone','Phone','trim|required|numeric');
		if($this->form_validation->run()==false){
			$data_temp['content'] = "shop_view";
		    $this->load->view('template_main',$data_temp);
		}
		else{	 
			$data = array(
			  'name' => $this->input->post('name'),
			  'lastName' => $this->input->post('last'),
			  'email'=> $this->input->post('email'),
			  'city' => $this->input->post('city'),
			  'phone' => $this->input->post('phone'),
			  'row_id' => $this->input->post('row_id')
			);
	   $this->load->model('products_model');
	   $this->products_model->add_record($data);
	   $data_temp['products'] = $this->products_model->get_all();
	    $data_temp['content'] = "pesa_shop_view";
        $this->load->view('template_main',$data_temp);
		}
	
}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */