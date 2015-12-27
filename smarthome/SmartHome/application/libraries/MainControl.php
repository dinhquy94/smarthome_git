<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainControl{    
    public function sendCommand($cmd){
       $ch = curl_init(hubip."?"."$cmd");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch); 
        return true;
    } 
}