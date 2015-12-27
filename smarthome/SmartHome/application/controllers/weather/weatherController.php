<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class weatherController extends CI_Controller {
	function __construct(){ 
		parent::__construct();
	}
	public function index(){
		$this->load->model('category/category_model');
		$data['categories'] = $this->category_model->getCategory();
		$this->load->view('weather/weatherview', $data);
	}
	public function setting(){	
		$this->load->model('weather/statecountry');
		$this->load->model('weather/weather_model');
		$data['region']  = $this->statecountry->getRegion();
		$saved = $this->weather_model->load(); 
		$data['country'] = $this->statecountry->getCountries($saved[0]['LocationRegion']);
		$data['state'] = $this->statecountry->getState($saved[0]['LocationCountry']);  
		$data['timezone'] = $this->statecountry->listtimezone();  
		$data['saved']  = $saved[0] ;
		$this->load->view('weather/weathersetting', $data);
	}
	public function getContries(){ 
		$region= $_POST['region'];
		$this->load->model('weather/statecountry');
		 $data = $this->statecountry->getCountries($region);
		 foreach ($data as $country){
		 	echo '<option>'.$country.'</option>';
		 }
	}
	//updatesetting
	public function updatesetting(){
		$region = $_POST['region'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$type = $_POST['type']; 
		$timezone= $_POST['timezone'];
		$this->load->model('weather/weather_model');
		$result = $this->weather_model->updatesetting($region, $country, $state, $type,$timezone);
		if($result){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	public function getCurrentWeather(){ 
		$this->load->model('weather/weather_model');
		$saved = $this->weather_model->load();
		$country = $saved[0]['LocationCountry'];
		$state = $saved[0]['LocationState'];
		$timezone =  $saved[0]['Timezone'];
		$type =  $saved[0]['TempType'];
		//var_dump($this->weather_model->getCurrentWeather($state, $country, $timezone,$type));
		echo json_encode($this->weather_model->getCurrentWeather($state, $country, $timezone,$type)); 
	}
	public function getState(){
		$contries = $_POST['country'];
		$this->load->model('weather/statecountry');
		$data = $this->statecountry->getState($contries);
		foreach ($data as $state){
			echo '<option>'.$state.'</option>';
		}
	
	}
	 
}
