
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller { 
 
	public function index()
	{ 	
	    $this->load->model('getdata');
	    $this->load->model('category/category_model');
	    $my_data['categories'] =  $this->category_model->getCategory();
	    $my_data['device'] = $this->getdata->getDevice();
        $my_data['rooms'] = $this->getdata->listall();
		$this->load->view('template/index', $my_data);
	} 
}
