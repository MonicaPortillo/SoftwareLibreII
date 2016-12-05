<?php
class Cookies implements ArrayAccess {
    
    public $cookies = array();
    
     public function __construct() {
        $this->cookies = &$_COOKIE;
    }
    
    public function offsetExists($offset){
        $key = $this->doKeyWithIPToMD5($offset);
        if(array_key_exists($key, $this->cookies))return TRUE;
        return FALSE;
    }

    public function offsetGet($offset) {
        $key = $this->doKeyWithIPToMD5($offset);
        return $this->cookies[$key];
    }

    public function offsetSet($offset, $value) {
        $key = $this->doKeyWithIPToMD5($offset);
        setcookie($key, $value, time()+1000000);
    }

    public function offsetUnset($offset) {
        $key = $this->doKeyWithIPToMD5($offset);
        setcookie($key, NULL, time()-1000);
    }
    
    function doKeyWithIPToMD5($offset){
        $ip = $this->getIP();
        $keyipmd5 = md5($offset.$ip);
        return $keyipmd5;
    }
    
    function getIP() {
        $ip = $_SERVER['REMOTE_ADDR'];
        if(!empty($_SERVER['HTTP_CLIENT_IP'])):
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        endif;
        return $ip;
    }
}



