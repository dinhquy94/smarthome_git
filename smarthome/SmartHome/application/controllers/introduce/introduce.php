<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class introduce extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function aboutthis(){
		   $this->load->view('introduce/about');
	}
}
