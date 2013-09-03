<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sandBox extends CI_Controller {

	public function index()
	{
	
		$data_temp['content'] = "sandbox_view";
		$this->load->view('template_main',$data_temp);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */