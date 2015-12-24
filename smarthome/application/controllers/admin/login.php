<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
     function __construct(){    
     	
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('core/user');
    }
    
	public function setLogin($username, $password)
		{
			if($this->user->login($username,$password )){
				echo 'success';
			}else{
				echo 'fail';
			}
		}	
	public function logout(){
			$this->user->logout();			
			header('Location:'.base_url().'index.php/');
		}
}
