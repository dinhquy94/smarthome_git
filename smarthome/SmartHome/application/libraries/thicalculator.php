<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thicalculator{
	public function judge($thi_index){
		// 0-15: Very cold; 15-20: Cold; 20-30 Comfortable; 30-34: Hot; 34-37: Very Hot  ; 37-50: Heavy hot
		
		 if($thi_index < 15){
		 	return 'Very Cold';
		 }elseif ($thi_index >= 15 and $thi_index <20){
		 	return 'Cold';
		 }elseif($thi_index >=20 and $thi_index < 30){
		 	return 'Comfortable';
		 }elseif ($thi_index >=30 and $thi_index <35){
		 	return 'Hot';
		 }elseif ($thi_index >=35 and $thi_index < 38){
		 	return 'Very hot';
		 }else {
		 	return 'Not good for human';
		 } 
	}
	
 	public function calculator($tempcel, $humid){
    	$temp = $this->_celciousTofahrenheit($tempcel);
      	$c1 = 16.923;
      	$c2 = 0.185212;
      	$c3 = 5.37941; 
      	$c4 = -0.100254;
      	$c5 =  9.41695* pow(10, -3);
      	$c6 = 7.28898* pow(10, -3) ;
      	$c7 = 3.45372 * pow(10, -4);
      	$c8 = -8.14971* pow(10, -4);
      	$c9 = 1.02102* pow(10, -5);
      	$c10 = -3.8646* pow(10, -5);
      	$c11 = 2.91583* pow(10, -5);
      	$c12 = 1.42721* pow(10, -6);
      	$c13 = 1.97483* pow(10, -7);
      	$c14 = -2.18429* pow(10, -8);
      	$c15 = 8.43296* pow(10, -10);
      	$c16 = -4.81975* pow(10, -11) ;
      	$thi_index = $c1 + $c2* $temp + $c3 * $humid 
      	+  $c4 *$temp * $humid +  $c5 * pow($temp, 2)  
      	+  $c6 * pow($humid, 2) +  $c7 *  pow($temp, 2) * $humid 
      	+  $c8 * $temp * pow($humid, 2) +  $c9 *  pow($temp, 2) *  pow($humid, 2) 
      	+  $c10* pow($temp, 3) +  $c11 *  pow($humid, 3) 
      	+  $c12 *  pow($temp, 3) *  $humid +  $c13 * $temp *  pow($humid, 3) 
      	+  $c14 *  pow($temp, 3)*  pow($humid, 2)  + 
      	$c15 *  pow($temp, 2) *  pow($humid, 3) + 
      	$c16*  pow($temp, 3) *  pow($humid, 3)  ;
      	return floor($this->_fahrenheittocelcious($thi_index));
    }
    private function _celciousTofahrenheit($celcious){
    	return  $celcious * 9/5 + 32;
    
    }
    private function _fahrenheittocelcious($fahrenheit){
    	return  ($fahrenheit - 32)*5 / 9;
    	 
    }
    
 
}