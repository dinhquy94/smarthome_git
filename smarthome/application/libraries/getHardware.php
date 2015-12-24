<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class getHardware{

    public function getData($url){
        $ch = curl_init("$url");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }
 
}