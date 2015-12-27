<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class eventController extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		
		$this->load->model('event/event_model');
		//getSomething
		$data['allevent'] = $this->event_model->getSomething();	
		$this->load->view('event/index', $data);
	}
} 
