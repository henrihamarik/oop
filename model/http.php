<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 23.01.2018
 * Time: 12:22
 */

class http
{
    var $vars = array();
    var $server = array();
    public function __construct()
    {
        $this->init();
        $this->initConst();
    }

    function init(){
        $this->vars = array_merge($_GET, $_POST);
        $this->server = $_SERVER;
    }

    function initConst(){
        $constNames = array('HTTP_HOST','SCRIPT_NAME','REMOTE_ADDR');
        foreach ($constNames as $constName){
            if(!defined($constName)and isset($this->server[$constName])){
                define($constName, $this->server[$constName]);
            }
        }
    }

    function get($name){
        if (isset($this->vars[$name])){
            return $this->vars[$name];
        } else {
            return false;
        }
    }
    function set($name, $value){
        $this->vars[$name] = $value;
    }
    function redirect($url=false){
        //
        global $sess;
        $sess->flush();
        if ($url == false){
            $url = $this->getLink();
        }
        $url = str_replace('&amp', '&', $url);
        header('Location: '.$url);
        exit;
    }
}