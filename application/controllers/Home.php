<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('layout');
	}

	public function template_list()
	{
		$this->load->view('ng-partials/home.php');
	}

	public function upload_hero()
	{
		$this->load->view('ng-partials/upload-hero.php');
	}

	public function upload_gallery()
	{
		$this->load->view('ng-partials/upload-gallery.php');
	}

	public function step($step='1')
	{		
 		$this->load->view("partials/step{$step}.php");
	}
	
	public function extend_reach() {
		$this->load->view('ng-partials/product_extend_reach.php');
	}

	public function free() {
		$this->load->view('ng-partials/product_free.php');
	}

	public function get_found() {
		$this->load->view('ng-partials/product_get_found.php');
	}

	public function suggestions( $version = 0 ) {
		if ( !$version ) {
			$this->load->view('ng-partials/suggestions.php');
		}
		else {
			$this->load->view("ng-partials/suggestions-{$version}.php");
		}
	}

	public function product($product_name) {
		$this->load->view( "ng-partials/product_{$product_name}.php" );
	}

	public function bna() {
		$this->load->view( "ng-partials/bna.html" );
	}

	public function keywords() {
		$this->load->view( "ng-partials/keywords.html" );
	}

	public function postcode() {
		$this->load->view( "ng-partials/postcode.php" );
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */