<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data_temp['content'] = "blog_view";
		$this->load->view('template_main',$data_temp);
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */