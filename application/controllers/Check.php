<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

	public function index()
	{
		if ( $this->agent->is_mobile() ) {
			redirect(base_url().'homepage/index', 'refresh');
		}
		else {
			$extra = '';
		 	if ( $this->agent->platform() == 'Mac OS X') {
				$extra = '&mac=1';
			}
			
			redirect(base_url().'emulator/iphone.php?url='.base_url().$extra, 'refresh');
		}
	}
	
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */