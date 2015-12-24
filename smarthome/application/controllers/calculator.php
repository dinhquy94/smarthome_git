<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calculator extends CI_Controller {
     function __construct(){    
        parent::__construct();
    }
 
    public function calculatorThi($temp, $humid){          
    $this->load->library('thicalculator');       
    echo $this->thicalculator->calculator($temp, $humid);  
    } 
}
