<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 23.01.2018
 * Time: 12:53
 */
class linkobject extends http
{
    var $baseLink = false;
    var $protocol = 'http://';
    var $eq = '=';
    var $delim = '&amp;';

    public function __construct()
    {
        parent::__construct();
        $this->baseLink = $this->protocol.HTTP.HOST.SCRIPT_NAME;
        echo $this->baseLink;
    }

    function addToLink(&$link, $name, $value) {
        if ($link !=''){
            $link = $link.$this->delim;
        }
        $link = fixUrl($name).$this->eq.fixUrl($value);
        echo $link.'<br />';
    }
}