<?php
class weather_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function load(){
        $query = $this->db->get("smh_weather");
        return $query->result_array(); 
    } 
    public function updatesetting($region, $country, $state, $type,$timezone){
	 	if ($region != '' && $country != '' && $state != '' && $type != ''){
	 		$data = array(
	 				'LocationRegion' => $region,
	 				'LocationCountry' => $country,
	 				'LocationState' => $state,
	 				'TempType' => $type,
	 				'Timezone' => $timezone
	 		); 
	 		$this->db->where('id', 1);
	 		$this->db->update('smh_weather', $data);
	 		return true;
	 	}else {
	 		return false;
	 	} 
    }
    public function getCurrentWeather($state, $country, $timezone, $type){
    	 
    	$state =str_replace(" ","%20",$state);
    	$country = str_replace(" ","%20",$country);
    	if($type == 'Celcious'){
    		$api = 'http://api.openweathermap.org/data/2.5/weather?q='.$state.','.$country.'&appid=2de143494c0b295cca9337e1e96b00e0&units=metric';
    	}else{
    		$api = 'http://api.openweathermap.org/data/2.5/weather?q='.$state.','.$country.'&appid=2de143494c0b295cca9337e1e96b00e0&units=Imperial';
     	} 
    	$this->load->library('getget');
    	$html = $this->getget->getData($api); 
    	$data = json_decode($html, true);
    	$weather = Array();
    	$weather['type'] = $type;
    	$weather['temp_max'] = $data ['main']['temp_max'];
    	$weather['temp'] = $data ['main']['temp'];
    	$weather['humidity'] = $data ['main']['humidity'];
    	$weather['temp_min'] = $data ['main']['temp_min'];
    	$weather['main'] = $data['weather'][0]['main'];
    	$weather['country'] = $data['sys']['country'];
    	$weather['state'] = $data['name']; 
    	$weather['pressure'] = $data ['main']['pressure'];
    	$weather['windspeed'] = $data ['wind']['speed'];
    	$weather['datetime'] = $date = date('l, F j, Y').' '.date('H:i A');
    	$datetime = new DateTime(gmdate("Y-m-d\TH:i:s\Z", $data ['sys']['sunset']));
    	$la_time = new DateTimeZone($timezone);
    	$datetime->setTimezone($la_time);
    	$weather['sunset'] = $datetime->format('H:i');
    	$datetimesunrise = new DateTime(gmdate("Y-m-d\TH:i:s\Z", $data ['sys']['sunrise']));    	 
    	$datetimesunrise->setTimezone($la_time);
    	$weather['sunrise'] = $datetimesunrise->format('H:i');    	
    	//Get 3 days weather forecast
    	if($type == 'Celcious'){
    		$api = 'http://api.openweathermap.org/data/2.5/weather?q='.$state.','.$country.'&appid=2de143494c0b295cca9337e1e96b00e0&units=metric';
    		$api = 'http://api.openweathermap.org/data/2.5/forecast/daily?q='.$state.','.$country.'&mode=json&units=metric&cnt=7&appid=2de143494c0b295cca9337e1e96b00e0';
    	}else{
    		$api = 'http://api.openweathermap.org/data/2.5/forecast/daily?q='.$state.','.$country.'&mode=json&units=Imperial&cnt=7&appid=2de143494c0b295cca9337e1e96b00e0';
    	}
    	$this->load->library('getget');
    	$html = $this->getget->getData($api);
    	$data = json_decode($html, true);
    	$weather['day1']['dt'] = gmdate("l", $data['list'][1]['dt']);
    	$weather['day2']['dt'] = gmdate("l", $data['list'][2]['dt']);
    	$weather['day3']['dt'] = gmdate("l", $data['list'][3]['dt']);
    	$weather['day1']['main'] = $data['list'][1]['weather'][0]['main'];
    	$weather['day2']['main'] = $data['list'][2]['weather'][0]['main'];
    	$weather['day3']['main'] = $data['list'][3]['weather'][0]['main']; 
    	$weather['day1']['max'] =  $data['list'][1]['temp']['max'];
    	$weather['day2']['max'] =  $data['list'][2]['temp']['max'];
    	$weather['day3']['max'] =  $data['list'][3]['temp']['max'];
    	$weather['day1']['min'] =  $data['list'][1]['temp']['min'];
    	$weather['day2']['min'] =  $data['list'][2]['temp']['min'];
    	$weather['day3']['min'] =  $data['list'][3]['temp']['min'];
    	$weather['day0']['max'] =  $data['list'][0]['temp']['max'];
    	$weather['day0']['min'] =  $data['list'][0]['temp']['min'];
    	
    return  $weather;;
    	//echo gmdate("Y-m-d\TH:i:s\Z", '1448187245')->setTimezone();
    	//echo  date_default_timezone_get();
    	
    }
 
    private function _celciousTofahrenheit($celcious){
    	return  $celcious * 9/5 + 32;
    
    }
    private function _fahrenheittocelcious($fahrenheit){
    	return  ($fahrenheit - 32)*5 / 9;
    	 
    }
    
}
