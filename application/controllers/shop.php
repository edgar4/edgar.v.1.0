<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {
	
	public function index()
	{
	$this->load->model('products_model');
	$this->load->library('pagination');
	 $this->load->model('meta_model');
		
		$data_temp = array(
		'meta'=> $this->meta_model->shop()
		);
	 $config = array();
        $config["base_url"] = base_url() . "shop/index";
        $config["total_rows"] = $this->products_model->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<ul><li>';
        $config['full_tag_close'] = '</li></ul>';
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	   /* $data_temp['products'] =  $this->products_model->fetch_countries();*/
		$data_temp['links'] = $this->pagination->create_links();
	$data_temp['products'] = $this->products_model->get_all($config["per_page"], $page);
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
	   $data_temp['products'] = $this->products_model->get_all_this();
	    $data_temp['content'] = "pesa_shop_view";
        $this->load->view('template_main',$data_temp);
		}
	
}
	
function update(){			
     $this->load->model('products_model');
	// update data base
	 $tracker = $this->input->get('pesapal_transaction_tracking_id');
	 $id = $this->input->get('pesapal_merchant_reference');
	 $update = array(
	 'tracking_id'=> $tracker,
	 'pesapal_merchant_reference'=> $id
	 );
	 
	
	$this->products_model->update_record($update);
	$this->cart->destroy();
	$this->index();
	 
     
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */