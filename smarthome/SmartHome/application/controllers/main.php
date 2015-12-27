<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
     function __construct(){   
     
        parent::__construct();
    }

    public function saveData()
    {
    	$this->load->database();
    	$data['data'] = $_GET['dataname'];
    	$this->db->insert('demo', $data);
    	return true;
    }
    
    public function homepage()
    {
    	$this->load->view('homepage');
    }
	public function index()
	{
        $this->load->view('function');
	}
	public function sensor()
	{	//$this->load->helper('sensor');
        $this->load->view('sensor/sensor');

	} 
	
	public function sensordetail()
	{
        $this->load->view('sensor/detail');
	}
	public function tempdetail()
	{
		$this->load->view('sensor/temperature');
	}
	public function humidity()
	{
		$this->load->view('sensor/humidity');
	} 
	public function firealarm()
	{
		$this->load->model('getdata');
		$my_data['rooms'] = $this->getdata->listall();
		$this->load->view('sensor/firealarm', $my_data);
	}
	
}
