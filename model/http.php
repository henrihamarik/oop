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
    }

    function init(){
        $this->vars = array_merge($_GET, $_POST);
        $this->server = $_SERVER;
    }
}