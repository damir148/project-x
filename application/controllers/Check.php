<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

	public function index()
	{
		if ( $this->agent->is_mobile() ) {
			redirect(base_url().'homepage/index', 'refresh');
		}
		else {
			redirect(base_url().'emulator/iphone.php?url=mysensis-poc.laws-sensis.com.au', 'refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */