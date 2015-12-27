<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class categoryController extends CI_Controller {
	function __construct(){
		parent::__construct();
	} 
	public function index(){
		$this->load->model('category/category_model');
		$data['categories'] = $this->category_model->getCategory();
		$this->load->view('category/category_mainview', $data);
	}
	public function categoryDetail($categoryId){
		$this->load->model('getdata');
		$data['device'] = $this->getdata->getDevice();
		$this->load->model('category/category_model');
		$data['categories'] = $this->category_model->getCategory();		 
		$data['rooms'] = $this->getdata->listall();
		$data['categoryid'] = $categoryId;
		$this->load->view('category/category_detail', $data);
	}
	public function demo($CategoryId, $roomId){ 
		$this->load->model('category/category_model');
		var_dump( $this->category_model->isEmptyDevice($CategoryId, $roomId));
	 
	}
}
