<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sandBox extends CI_Controller {
	   public function __construct() {
		   
		   
        parent:: __construct();
        $this->load->model("sandbox_model");
        $this->load->library("pagination");
    }

	public function index()
	{
		 $config = array();
        $config["base_url"] = base_url() . "sandbox/index";
        $config["total_rows"] = $this->sandbox_model->record_count();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<ul class="paginate"><li>';
        $config['full_tag_close'] = '</li></ul>';
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data_temp['projects'] =  $this->sandbox_model->fetch_countries($config["per_page"], $page);
		$data_temp['links'] = $this->pagination->create_links();;
		
		$data_temp['content'] = "sandbox_view";
		$this->load->view('template_main',$data_temp);
	}
	
	 
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */