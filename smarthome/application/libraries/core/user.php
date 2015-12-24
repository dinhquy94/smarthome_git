<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user{
	private $api;
     function __construct(){ 
     	$this->api = &get_instance();
     	$this->api->load->helper('cookie');
     	$this->api->load->model('admin/checklogin');
        
    } 
	public function login($username, $password )
		{
			if($this->api->checklogin->isLogin($username, $password)){			
			
			delete_cookie('smr_username');
			delete_cookie('smr_password');		
			//if($logintype == 1){
				$cookies = Array();
				$cookies[] = array(
						'name'   => 'username',
						'value'  => $username,
						'expire' => time()+86500,
						'path'   => '/',
						'prefix' => 'smr_',
				);
				$cookies[] = array(
						'name'   => 'password',
						'value'  => $password,
						'expire' => time()+86500,
						'path'   => '/',
						'prefix' => 'smr_',
				);
				foreach ($cookies as $cookie){
					set_cookie($cookie);
				
			//	}
				}
				return true;
			}else {
				delete_cookie('smr_username');
				delete_cookie('smr_password');
				return false;
				
			}
			
		}
		public function isLogin(){
			
			return $this->api->checklogin->isLogin(get_cookie('smr_username'), get_cookie('smr_password'));
			//echo get_cookie('smr_username');
		}
		
		public function logout(){
			delete_cookie('smr_username');
			delete_cookie('smr_password');				
		}
}
