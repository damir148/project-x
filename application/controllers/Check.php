<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

	public function index()
	{
		if ( preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]) ) {
			redirect('/homepage/index', 'refresh');
		}
		else {
			redirect('http://mysensis-poc.laws-sensis.com.au/emulator/iphone.php?url=mysensis-poc.laws-sensis.com.au', 'refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */