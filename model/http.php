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
}